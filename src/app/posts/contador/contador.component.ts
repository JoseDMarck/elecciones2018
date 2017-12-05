import { Component, OnInit, ElementRef } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';
import { DomSanitizer } from '@angular/platform-browser';
import { Observable, Subscription } from 'rxjs/Rx';

@Component({
  selector: 'app-contador',
  templateUrl: './contador.component.html',
  styleUrls: ['./contador.component.css']
})
export class ContadorComponent implements OnInit {

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

 


   

  constructor(private postsService: PostsService,  private router: Router,  private route: ActivatedRoute, private sanitizer: DomSanitizer, elm: ElementRef) { 
    this.futureString = "July 1, 2018 00:00:00";
      
  }

  dhms(t) {
        var days, hours, minutes; 
        days = Math.floor(t / 86400);
        t -= days * 86400;
         

        return [
            days,
        ].join(' ');
    }


dhms2(t) {
        var days, hours, minutes; 
        days = Math.floor(t / 86400);
        t -= days * 86400;
        hours = Math.floor(t / 3600) % 24;
        t -= hours * 3600;
        minutes = Math.floor(t / 60) % 60;
        t -= minutes * 60;
         

        return [ 
            hours + ' h',
            minutes + ' m'

        ].join(' ');
    }

  ngOnInit() {

  	    this.future = new Date(this.futureString); 
        this.$counter = Observable.interval(4000).map((x) => {
            this.diff = Math.floor((this.future.getTime() - new Date().getTime()) / 1000);
            return x;
        });

        this.$counter2 = Observable.interval(4000).map((x) => {
            this.diff = Math.floor((this.future.getTime() - new Date().getTime()) / 1000);
            return x;
        });


        this.subscription = this.$counter.subscribe((x) => this.dias = this.dhms(this.diff));
        this.subscription2 = this.$counter2.subscribe((x) => this.horas_minutos = this.dhms2(this.diff));


  }


ngAfterContentInit(){

	  setTimeout(() => { 
      this.subscription.unsubscribe();
	this.subscription2.unsubscribe();
   }, 4000); // Or however long you need the delay to be


	
}



}
