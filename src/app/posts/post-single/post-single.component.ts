import { Component, OnInit, ElementRef } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { DomSanitizer } from '@angular/platform-browser';
import { Observable, Subscription } from 'rxjs/Rx';



@Component({
  selector: 'app-post-single',
  templateUrl: './post-single.component.html',
  styleUrls: ['./post-single.component.css'],
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
    ]),

    trigger('heroState2', [
    state('inactive', style({transform: 'translateX(0)'})),
    state('active',   style({transform: 'translateX(-100%) '})),
    
    transition('inactive => active', animate('400ms ease-in')),
    transition('active => inactive', animate('200ms ease-out')),
    ])
  ],
  providers: [PostsService]
})

export class PostSingleComponent implements OnInit {

	  post: Post;
    post_related: Post;
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
  show2 = false; 
  posts_Home: Post[];
  posts: Post[];
  posts_related: Post[];
  repoUrl:any;
   slugArray: any;


  categorias: Post[];
  post_count:number;
  categoriasCount:any;
  arregloCountCat:any;
  categoria:any;
  current_id:any;
  imageX:any;
  loadMoreVisible : boolean;
  selectedClass: number;
 
 constructor(private postsService: PostsService,  private router: Router,  private route: ActivatedRoute, private sanitizer: DomSanitizer, elm: ElementRef) { 
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



  getPost(slug){
    this.postsService
      .getPost(slug)
      .subscribe(res => {
        this.post = res[0];
        console.log("Post", this.post)
         this.categoria = res[0].categories;
         this.current_id = res[0].id;
         this.slugArray = res[0].slug
         console.log("CATEGORIA", this.categoria)
         console.log("CURRENT ID", this.current_id)
         this.getPostRelated(this.categoria, this.current_id);
         this.repoUrl = 'http://michoacantrespuntocero.com/2018elecciones.com/posts-redes/'+this.slugArray;
   
      });
  }

  getPostRelated(cat, current_id){
    this.postsService
      .getPostsRelated(cat, current_id)
      .subscribe(res => {
        this.posts_related = res;

        console.log(this.posts_related)
         //this.imageX = this.sanitizer.bypassSecurityTrustStyle(`url(${element.image})`);
      });
  }



  ngOnInit() {
   

  	this.route.params.forEach((params: Params) => {
       let slug = params['slug'];
       this.getPost(slug)
    });


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


  //ANIMACION TOGGLE
    get stateName() {
        return this.show ? 'show' : 'hide'
     }

  toggle() {
        this.show = !this.show;
    }


    //ANIMACIÓN PARA EL MENU
    get stateName2() {
        return this.show2 ? 'inactive' : 'active'
    }

    toggle2() {
        this.show2 = !this.show2;
         console.log("this.show", this.show2)
    }




  ngAfterViewInit() {

    

   
   console.log("estoy  en ngAfterViewInit")
   setTimeout(() => { 
     this.toggle()
   }, 300); // Or however long you need the delay to be
  

  }

  GoToInicio() {
     this.router.navigate([""]);
    console.log("Go to Inicio")
  }


  SeleccionMenu(slug:string ) {
     this.router.navigate(["publicaciones-"+slug]);
  }


  selectPost(slug) {
   this.router.navigate([slug]);
   console.log("Slug normal", slug)
  }



}
