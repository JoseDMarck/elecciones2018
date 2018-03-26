import { Component, OnInit, ElementRef } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { DomSanitizer } from '@angular/platform-browser';




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
    private dias: string;
    private horas_minutos: string;



 
  show = false; 
  show2 = false; 
  posts_Home: Post[];
  posts: Post[];
  posts_related: Post[];
  repoUrl:any;
  slugArray: any;
  TweetTitulo: any;


  categorias: Post[];
  post_count:number;
  categoriasCount:any;
  arregloCountCat:any;
  categoria:any;
  current_id:any;
  imageX:any;
  loadMoreVisible : boolean;
  selectedClass: number;
  repoUrlWA:any;
  repoUrlWA2:any;
  sanitizedUrl:any
  reloadState: any;
 
 constructor(private postsService: PostsService,  private router: Router,  private route: ActivatedRoute, private sanitizer: DomSanitizer) { 
   this.arregloCountCat = [];
    this.loadMoreVisible = false;
    this.futureString = "July 1, 2018 00:00:00";
    this.post_count = 20;
    //this.reloadState = this.route.snapshot.queryParamMap.get("refresh");
    

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
         this.TweetTitulo = res[0].title.rendered
         console.log("CATEGORIA", this.categoria)
         console.log("CURRENT ID", this.current_id)
         this.getPostRelated(this.categoria, this.current_id);
         this.repoUrl = 'http://michoacantrespuntocero.com/2018elecciones.com/'+this.slugArray;
         this.repoUrlWA = 'whatsapp://send?text='+this.repoUrl;
         this.sanitizedUrl = this.sanitizer.bypassSecurityTrustUrl('http://michoacantrespuntocero.com/2018elecciones.com/las-mujeres-que-proponen');
         this.reloadState = this.route.snapshot.queryParamMap.get("refresh");


        if(this.reloadState === "1"){
          console.log("Reloaded Page OK", this.reloadState);
          this.router.navigate([slug], { queryParams:{refresh:"0"} }); 
          setTimeout(()=>{ window.location.reload(); }, 800); 
        }
        else{
          console.log("Reloaded Page NO", this.reloadState);      
        }
         
         

      });
  }
 
  getPostRelated(cat, current_id){
    this.postsService
      .getPostsRelated(cat, current_id)
      .subscribe(res => {
        this.posts_related = res;
        console.log(this.posts_related)
      });
  }


  sanitize(url:string){
      return this.sanitizer.bypassSecurityTrustUrl(url);
  }

  ngOnInit() {
   

  	this.route.params.forEach((params: Params) => {
       let slug = params['slug'];
       this.getPost(slug)
    });


         
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


    //window.location.reload();

   
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


  selectPost(slug:string) {
   this.router.navigate([slug], { queryParams:{refresh:"1"} });
   console.log("Slug normal", slug)
   slug = "";
  }


 

getBackground(image) {
    return this.sanitizer.bypassSecurityTrustStyle(`linear-gradient(rgba(29, 29, 29, 0), rgba(16, 16, 23, 0.5)), url(${image})`);
}


}
