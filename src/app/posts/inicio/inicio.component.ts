import { Component, OnInit } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { DomSanitizer } from '@angular/platform-browser';


@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css'],
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
export class InicioComponent implements OnInit {

  show = false;
  
  posts_Home: Post[];
  posts: Post[];
  

  categorias: Post[];
  post_count:number;
  categoriasCount:any;
  arregloCountCat:any;
  imageX:any;
  loadMoreVisible : boolean;
  selectedClass: number;

  constructor(private postsService: PostsService, private router: Router,  private sanitizer: DomSanitizer) { 
    this.arregloCountCat = [];
    this.loadMoreVisible = false

   
  }





  getPosts_Home(){
    this.postsService
      .getPostsHome()
      .subscribe(res => {
        this.posts = res;

        console.log(this.posts)
         //this.imageX = this.sanitizer.bypassSecurityTrustStyle(`url(${element.image})`);
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


  ngOnInit() {

    this.getPosts_Home();

  	 
  }


 selectPost(slug) {
	 this.router.navigate(["publicaciones/"+slug]);
   //this.router.navigate([slug]);
    console.log("Slug normal", slug)
}


}
