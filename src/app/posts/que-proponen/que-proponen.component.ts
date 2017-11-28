import { Component, OnInit, ElementRef  } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { DomSanitizer } from '@angular/platform-browser';
import { Observable, Subscription } from 'rxjs/Rx';


@Component({
  selector: 'app-que-proponen',
  templateUrl: './que-proponen.component.html',
  styleUrls: ['./que-proponen.component.css'],
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
export class QueProponenComponent implements OnInit {

  private future: Date;
    private futureString: string;
    private diff: number;
    private $counter: Observable<number>;
    private $counter2: Observable<number>;
    private subscription: Subscription;
    private subscription2: Subscription;
    private dias: string;
    private horas_minutos: string;


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


  constructor(private postsService: PostsService, private router: Router,  private sanitizer: DomSanitizer, elm: ElementRef) { 
    this.arregloCountCat = [];
    this.loadMoreVisible = false;
    this.futureString = "July 1, 2018 00:00:00";
    this.post_count = 20;
   
  }


dhms(t) {
        var days, hours, minutes, seconds;
        days = Math.floor(t / 86400);
        t -= days * 86400;
         

        return [
            days,
        ].join(' ');
    }


dhms2(t) {
         var days, hours, minutes, seconds;
        days = Math.floor(t / 86400);
        t -= days * 86400;
        hours = Math.floor(t / 3600) % 24;
        t -= hours * 3600;
        minutes = Math.floor(t / 60) % 60;
        t -= minutes * 60;
        seconds = t % 60;


        return [ 
            hours + ' h',
            minutes + ' m'

        ].join(' ');
    }



  getPosts(){
    this.postsService
      .getPosts_QueProponen()
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
     console.log("Destroy*******");
     this.subscription.unsubscribe();
     this.subscription2.unsubscribe();

  }


  ngOnInit() {

    this.getPosts();


       this.future = new Date(this.futureString);
        
        this.$counter = Observable.interval(1000).map((x) => {
            this.diff = Math.floor((this.future.getTime() - new Date().getTime()) / 1000);
            return x;
        });

        this.$counter2 = Observable.interval(1000).map((x) => {
            this.diff = Math.floor((this.future.getTime() - new Date().getTime()) / 1000);
            return x;
        });

        this.subscription = this.$counter.subscribe((x) => this.dias = this.dhms(this.diff));
        this.subscription2 = this.$counter2.subscribe((x) => this.horas_minutos = this.dhms2(this.diff));
  }


 selectPost(slug) {
   this.router.navigate([slug]);
   console.log("Slug normal", slug)
}



GoToInicio() {
 this.router.navigate([""]);
    console.log("Go to Inicio")
}



onScroll () {

    if (this.post_count <=  90) {
      this.post_count = this.post_count + 5;
      console.log('scrolled!!', this.post_count )
      this.LoadMorePosts(this.post_count)
    } 
    else {
      console.log("Ya llegamos al limite");
    }
  }


    //LOAD MORE POST
 LoadMorePosts( numero){
   
   console.log("numero load more "+ numero)
    this.postsService
      .LoadMorePostsServicebyCategory(33, numero)
      .subscribe(res => {
        this.posts = res;

      });
 }


SeleccionMenu(slug:string ) {
     this.router.navigate(["publicaciones-"+slug]);
}

}
