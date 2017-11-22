import { Component, OnInit, Input, AfterViewInit, ViewChild } from '@angular/core';
import { Post } from '../post';
import { PostsService } from '../posts.service';
import { Router } from '@angular/router';
import { trigger, state, style, animate,transition } from '@angular/animations';



@Component({
  selector: 'app-menu-general',
  templateUrl: './menu-general.component.html',
  styleUrls: ['./menu-general.component.css'],
})
export class MenuGeneralComponent  {




menu_current:any;
selectedClass: number;
recibirMensaje:any;

  constructor(private router: Router) { 
    this.selectedClass = 0;
    this.recibirMensaje = "hola";

  }


 // this.MusicaComponent.MostrarMensaje();



SeleccionMenu(ValorNuevo: number, slug:string ) {
   
  if (this.selectedClass === ValorNuevo) {
      this.selectedClass = 0;
  }

  else {
    	this.selectedClass = ValorNuevo;
    	//Vamos a la pagina:
   	 	this.router.navigate(["publicaciones-"+slug]);
    	console.log(slug);
  	}


  
	}


ngAfterViewInit(){
   //this.recibirMensaje = this.child.mensaje
   //this.mensaje;
  
}


GotoInicio(ValorNuevo: number ) {
      if (this.selectedClass === ValorNuevo) { this.selectedClass = 0;  }
      else {
          this.selectedClass = ValorNuevo;
          this.router.navigate([""]);
      }
}




}


