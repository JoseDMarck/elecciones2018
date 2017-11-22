import { Component, OnInit } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';

@Component({
  selector: 'app-post-list-viajes',
  templateUrl: './post-list-viajes.component.html',
  styleUrls: ['./post-list-viajes.component.css'],
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
export class PostListViajesComponent implements OnInit {

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

  GetPosts_viajes(){
    this.postsService
      .getPosts_viajes()
      .subscribe(res => {
        this.posts = res;
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

   ngOnDestroy() {
     console.log("Destroy*******")

  }



  // CATEGORIAS COUNT SERVICE
  getCategoryCountViajes(){
     this.postsService
      .GetCategoryCountViajes()
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


  ngOnInit() {
  	this.GetPosts_viajes();
    this.getCategoryCountViajes();
  }


 selectPost(slug) {
	 this.router.navigate(["publicaciones/"+slug]);
   //this.router.navigate([slug]);
    console.log("Slug normal", slug)
}


}