import { Component   } from '@angular/core';
import { Router } from '@angular/router';
import {Renderer} from '@angular/core';
import { trigger, state, style, animate,transition } from '@angular/animations';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],

 animations: [
    
  trigger('heroState', [
    state('inactive', style({transform: 'translateX(100%)  '})),
    state('active',   style({transform: 'translateX(0%) '})),
    
    transition('inactive => active', animate('400ms ease-in')),
    transition('active => inactive', animate('200ms ease-out')),
     
  ])

  ],
   


  
})


export class AppComponent {
  title = 'app works!';

menu_current:any;
selectedClass: number;
MenuVisible : boolean;
show = true;

  constructor(private router: Router, private render:Renderer ) { 
     
  }
 

 
 
//ANIMACION TOGGLE
get stateName() {
      return this.show ? 'inactive' : 'active'
}

   toggle() {
      this.show = !this.show;
      console.log("this.show", this.show)
  }

 
 


GoToPage(slug) {
	this.router.navigate(["publicaciones-"+slug]);
	console.log("Go to page-"+slug);
	//this.render.setElementClass(event.target,"menu-current",true);
}


openMenu(){
  this.MenuVisible = false
}

closeMenu(){
this.MenuVisible = true
}


SelecccionMenu(slug:string ) {
   
    //Vamos a la pagina:
    this.router.navigate(["publicaciones-"+slug]);
    console.log(slug);
  
}


GotoInicio() {
  
this.router.navigate([""]);
   
 
}






}



