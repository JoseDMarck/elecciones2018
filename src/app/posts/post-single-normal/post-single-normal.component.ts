import { Component, OnInit } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { MetaService } from 'ng2-meta';
import { CeiboShare } from 'ng2-social-share';


@Component({
  selector: 'app-post-single-normal',
  templateUrl: './post-single-normal.component.html',
  styleUrls: ['./post-single-normal.component.css'],
  providers: [PostsService],
})

export class PostSingleNormalComponent implements OnInit {

  post: Post;
  slugArray: any;
  repoUrl:any;

 constructor(private postsService: PostsService, private route: ActivatedRoute) { 
   
  }


 getPost(slug){

console.log("Slug XXXX", slug)
    this.postsService
      .getPost(slug)
      .subscribe(res => {
        this.post = res[0];
        this.slugArray = res[0].slug
        console.log("Post", this.post)
        console.log("SlugArray", this.slugArray )
        this.repoUrl = 'http://michoacantrespuntocero.com/cultura30/posts-redes/'+this.slugArray;


      });
  }


  ngOnInit() {
   
  	this.route.params.forEach((params: Params) => {
       let slug = params['slug'];
       this.getPost(slug);
       //this.repoUrl = 'http://michoacantrespuntocero.com/cultura30/posts-redes/'+this.slugArray;
       //http://michoacantrespuntocero.com/cultura30/posts-redes/2a-exposicion-de-altares-de-michoacanos-ilustres/

       console.log("Slug YYYYY", slug)
        
    });

  

    //this.repoUrl = 'http://michoacantrespuntocero.com/cultura30/posts-redes/'+this.slugArray;
     
  }





}
