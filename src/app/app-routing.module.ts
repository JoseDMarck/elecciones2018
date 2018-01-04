import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PostSingleComponent } from './posts/post-single/post-single.component';
import { EntranaComponent } from './posts/entrana/entrana.component';
import { InicioComponent } from './posts/inicio/inicio.component';
import { AsiPasoComponent } from './posts/asi-paso/asi-paso.component';
import { DondeDiceComponent } from './posts/donde-dice/donde-dice.component';
import { QueMePerdiComponent } from './posts/que-me-perdi/que-me-perdi.component';
import { QueProponenComponent } from './posts/que-proponen/que-proponen.component';
import { QueSeVieneComponent  } from './posts/que-se-viene/que-se-viene.component';
import { QuienJalaComponent  } from './posts/quien-jala/quien-jala.component';
import { NoticiasComponent  } from './posts/noticias/noticias.component';





const routes: Routes = [
   

  {
    path: 'publicaciones-entrana',
    component: EntranaComponent,
    pathMatch: 'full'
  },

  {
    path: 'publicaciones-asi-paso',
    component: AsiPasoComponent,
    pathMatch: 'full'
  },
  
  {
    path: 'publicaciones-donde-dice',
    component: DondeDiceComponent,
    pathMatch: 'full'
  },
  {
    path: 'publicaciones-que-me-perdi',
    component: QueMePerdiComponent,
    pathMatch: 'full'
  },
  {
    path: 'publicaciones-que-proponen',
    component: QueProponenComponent,
    pathMatch: 'full'
  },
  {
    path: 'publicaciones-que-se-viene',
    component: QueSeVieneComponent,
    pathMatch: 'full'
  },
  {
    path: 'publicaciones-quien-jala',
    component: QuienJalaComponent,
    pathMatch: 'full'
  },

  {
    path: 'publicaciones-noticias',
    component: NoticiasComponent,
    pathMatch: 'full'
  },

  {
    path: ':slug',
    component: PostSingleComponent
  },
   
  {
    path: '',
    component: InicioComponent,
    data: {
      meta: {
        'title': 'Home page',
        'description': 'This is the description shown in Google search results',
        'og:image': 'http://www.culturatrespuntocero.com/images/generales/logo.png'
      }
    }
  },
  
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
  providers: []
})
export class Wpng2RoutingModule { }