import { Component, OnInit } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router, ActivatedRoute, Params } from '@angular/router';


@Component({
  selector: 'app-post-single-normal',
  templateUrl: './post-single-normal.component.html',
  styleUrls: ['./post-single-normal.component.css'],
  providers: [PostsService]
})

export class PostSingleNormalComponent implements OnInit {

  post: Post;

 constructor(private postsService: PostsService, private route: ActivatedRoute) { 
   
  }


 getPost(slug){

console.log("Slug XXXX", slug)
    this.postsService
      .getPost(slug)
      .subscribe(res => {
        this.post = res[0];
        console.log("Post", this.post)
      });
  }


  ngOnInit() {
   
  	this.route.params.forEach((params: Params) => {
       let slug = params['slug'];
       this.getPost(slug);

       console.log("Slug YYYYY", slug)
    });

  }





}
