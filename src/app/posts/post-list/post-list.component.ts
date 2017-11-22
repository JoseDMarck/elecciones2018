import { Component, OnInit, Input } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { CeiboShare } from 'ng2-social-share';


  


@Component({
  selector: 'app-post-list',
  templateUrl: './post-list.component.html',
  styleUrls: ['./post-list.component.css'],
  
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
  ],

  providers: [PostsService]
})


 
export class PostListComponent implements OnInit {

  show = false;

  posts: Post[];

  categorias: Post[];
  post_count:number;
  categoriasCount:any;
  arregloCountCat:any;
  loadMoreVisible : boolean;
  @Input() valueToPass = 0;

  posts_enero: Post[];
  exist_post_enero: boolean;
  exist_post_febrero: boolean;
  exist_post_marzo: boolean;
  exist_post_abril: boolean;
  exist_post_mayo: boolean;
  exist_post_junio: boolean;
  exist_post_julio: boolean;
  exist_post_agosto: boolean;
  exist_post_septiembre: boolean;
  exist_post_octubre: boolean;
  exist_post_noviembre: boolean;
  exist_post_diciembre: boolean;

  posts_febrero: Post[];
  posts_marzo: Post[];
  posts_abril: Post[];
  posts_mayo: Post[];
  posts_junio: Post[];
  posts_julio: Post[];
  posts_agosto: Post[];
  posts_septiembre: Post[];
  posts_octubre: Post[];
  posts_noviembre: Post[];
  posts_diciembre: Post[];

   


constructor( private postsService: PostsService, private router: Router ) {
    this.post_count = 20;
    this.arregloCountCat = [];
    this.loadMoreVisible = false
}



 
  //ANIMACION TOGGLE
  get stateName() {
      return this.show ? 'show' : 'hide'
   }

  toggle() {
      this.show = !this.show;
  }
 
 

  getPosts(){
    this.postsService
      .getPosts()
      .subscribe(res => {
        this.posts = res;
        console.log("PostList", this.posts)

        /*for (var _i = 0; _i < this.PostValuesArreglo.length; _i++){
          this.id_Media = this.PostValuesArreglo[_i].featured_media
          console.log(this.id_Media);
          this.getPostMedia(this.id_Media);
        }*/

          
      });
  }




  // CATEGORIAS COUNT SERVICE
  getCategoryCount(){
  	 this.postsService
  	  .GetCategoryCount()
      .subscribe(res => {
        this.categorias = res;
        this.arregloCountCat = this.categorias;
      });
  }


 //LOAD MORE POST
 LoadMorePosts(id_cat, numero){
 	
 	console.log("numero load more "+ numero)
 	 this.postsService
      .LoadMorePostsService(id_cat,numero)
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
  	this.getPosts();
  	this.getCategoryCount();
    this.getPosts_enero();
    this.getPosts_febrero();
    this.getPosts_marzo();
    this.getPosts_abril();
    this.getPosts_mayo();
    this.getPosts_junio();
    this.getPosts_julio();
    this.getPosts_agosto();
    this.getPosts_septiembre();
    this.getPosts_octubre();
    this.getPosts_noviembre();
    this.getPosts_diciembre();
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



  SelecccionMenu( slug:string ) {
   
    //Vamos a la pagina:
    this.router.navigate(["publicaciones-"+slug]);
    console.log(slug);
   
}



selectPost(slug) {
  this.router.navigate([slug]);
  console.log("Slug single", slug)
}




// PARA LOS MESES DE LA CARTELERA  ==================
 getPosts_enero(){
    this.postsService
      .getPosts_Enero()
      .subscribe(res => {
        this.posts_enero = res;

        console.log("Enero", this.posts_enero.length);

        if (this.posts_enero.length > 0){  this.exist_post_enero = true; }
        else { this.exist_post_enero = false }

         


      });
  }


  getPosts_febrero(){
    this.postsService
      .getPosts_Febrero()
      .subscribe(res => {
        this.posts_febrero = res;

        console.log("Febrero", this.posts_febrero.length); 
        if (this.posts_febrero.length > 0){  this.exist_post_febrero = true; }
        else { this.exist_post_febrero = false }


      });
  }

  getPosts_marzo(){
    this.postsService
      .getPosts_Marzo()
      .subscribe(res => {
        this.posts_marzo = res;

        console.log("Marzo", this.posts_marzo.length); 
        if (this.posts_marzo.length > 0){  this.exist_post_marzo = true; }
        else { this.exist_post_marzo = false }

      });
  }


  getPosts_abril(){
    this.postsService
      .getPosts_Abril()
      .subscribe(res => {
        this.posts_abril = res;

        console.log("abril", this.posts_abril.length); 
        if (this.posts_abril.length > 0){  this.exist_post_abril = true; }
        else { this.exist_post_abril = false }


      });
  }

  getPosts_mayo(){
    this.postsService
      .getPosts_Mayo()
      .subscribe(res => {
        this.posts_mayo = res;

        console.log("mayo", this.posts_mayo.length); 
        if (this.posts_mayo.length > 0){  this.exist_post_mayo = true; }
        else { this.exist_post_mayo = false }
      });
  }
  getPosts_junio(){
    this.postsService
      .getPosts_Junio()
      .subscribe(res => {
        this.posts_junio = res;

        console.log("junio", this.posts_junio.length); 
        if (this.posts_junio.length > 0){  this.exist_post_junio = true; }
        else { this.exist_post_junio = false }

      });
  }
  getPosts_julio(){
    this.postsService
      .getPosts_Julio()
      .subscribe(res => {
        this.posts_julio = res;

        console.log("julio", this.posts_julio.length); 
        if (this.posts_julio.length > 0){  this.exist_post_julio = true; }
        else { this.exist_post_julio = false }


      });
  }
  getPosts_agosto(){
    this.postsService
      .getPosts_Agosto()
      .subscribe(res => {
        this.posts_agosto = res;


         console.log("agosto", this.posts_agosto.length); 
        if (this.posts_agosto.length > 0){  this.exist_post_agosto = true; }
        else { this.exist_post_agosto = false }


      });
  }

  getPosts_septiembre(){
    this.postsService
      .getPosts_Septiembre()
      .subscribe(res => {
        this.posts_septiembre = res;

        console.log("septiembre", this.posts_septiembre.length); 
        if (this.posts_septiembre.length > 0){  this.exist_post_septiembre = true; }
        else { this.exist_post_septiembre = false }

      });
  }

   getPosts_octubre(){
    this.postsService
      .getPosts_Octubre()
      .subscribe(res => {
        this.posts_octubre = res;

        console.log("octubre", this.posts_octubre.length); 
        if (this.posts_octubre.length > 0){  this.exist_post_octubre = true; }
        else { this.exist_post_octubre = false }


      });
  }

   getPosts_noviembre(){
    this.postsService
      .getPosts_Noviembre()
      .subscribe(res => {
        this.posts_noviembre = res;

        console.log("noviembre", this.posts_noviembre.length); 
        if (this.posts_noviembre.length > 0){  this.exist_post_noviembre = true; }
        else { this.exist_post_noviembre = false }

      });
  }

  getPosts_diciembre(){
    this.postsService
      .getPosts_Diciembre()
      .subscribe(res => {
        this.posts_diciembre = res;

        console.log("Diciembre", this.posts_diciembre.length); 
        if (this.posts_diciembre.length > 0){  this.exist_post_diciembre = true; }
        else { this.exist_post_diciembre = false }


      });
  }




}


