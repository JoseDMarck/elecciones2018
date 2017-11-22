import { Component, OnInit } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';


@Component({
  selector: 'app-post-list-libros-revistas',
  templateUrl: './post-list-libros-revistas.component.html',
  styleUrls: ['./post-list-libros-revistas.component.css'],

   animations: [
    trigger('fadeInAnimation', [
      state('show', style({
        opacity: 1
      })),
      state('hide',   style({
        opacity: 0
      })),
      transition('show => hide', animate('600ms ease-out')),
      transition('hide => show', animate('800ms ease-in'))
    ])
  ],

  providers: [PostsService]
})
export class PostListLibrosRevistasComponent implements OnInit {

  show = false;
  posts: Post[];

  categorias: Post[];
  post_count:number;
  categoriasCount:any;
  arregloCountCat:any;
  loadMoreVisible : boolean;
  selectedClass: number;


  constructor(private postsService: PostsService, private router: Router) {

    this.post_count = 20;
    this.arregloCountCat = [];
    this.loadMoreVisible = false

  }

 getPosts_libros_revistas(){
    this.postsService
      .getPosts_libros_revistas()
      .subscribe(res => {
        this.posts = res;
      });
  }

   // CATEGORIAS COUNT SERVICE
  getCategoryCountLibrosRevistas(){
     this.postsService
      .GetCategoryCountLibrosRevistas()
      .subscribe(res => {
        this.categorias = res;
        this.arregloCountCat = this.categorias;
      });
  }

  //LOAD MORE POST
 LoadMorePosts(id_cat, numero){
   
   console.log("numero load more "+ numero)
    this.postsService
      .LoadMorePostsServiceNormal(id_cat,numero)
      .subscribe(res => {
        this.posts = res;
         console.log(this.arregloCountCat.count);

           

         if(this.post_count > this.arregloCountCat.count    ) {  
           console.log("es mayor");
           this.loadMoreVisible = true;
    }
    this.post_count = this.post_count + 20;
    console.log(id_cat,numero)


      });
 }


 //ANIMACION TOGGLE
    get stateName() {
        return this.show ? 'show' : 'hide'
     }

    toggle() {
        this.show = !this.show;
    }




  ngAfterViewInit() {
   
   console.log("estoy  en ngAfterViewInit")
   setTimeout(() => { 
     this.toggle()
   }, 300); // Or however long you need the delay to be
  

  }


  ngOnInit() {
    this.getPosts_libros_revistas();
  	this.getCategoryCountLibrosRevistas();
  }


 selectPost(slug) {
	  this.router.navigate(["publicaciones/"+slug]);
    //this.router.navigate([slug]);
    console.log("Slug normal", slug)
}

}
