import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PostListComponent } from './posts/post-list/post-list.component';
import { PostSingleComponent } from './posts/post-single/post-single.component';
import { PostSingleNormalComponent } from './posts/post-single-normal/post-single-normal.component';
import { PostListMusicaComponent } from './posts/post-list-musica/post-list-musica.component';
import { PostListCineComponent } from './posts/post-list-cine/post-list-cine.component';
import { PostListLibrosRevistasComponent } from './posts/post-list-libros-revistas/post-list-libros-revistas.component';
import { PostListRadioPodcastComponent } from './posts/post-list-radio-podcast/post-list-radio-podcast.component';
import { PostListGastronomiaComponent } from './posts/post-list-gastronomia/post-list-gastronomia.component';
import { PostListArtesaniaComponent } from './posts/post-list-artesania/post-list-artesania.component';
import { PostListViajesComponent } from './posts/post-list-viajes/post-list-viajes.component';
import { PostListTruequesComponent } from './posts/post-list-trueques/post-list-trueques.component';
import { ExposicionesComponent  } from './posts/exposiciones/exposiciones.component';
import { ConferenciasComponent  } from './posts/conferencias/conferencias.component';
import { PostListEspaciosComponent } from './posts/post-list-espacios/post-list-espacios.component';
import { EntranaComponent } from './posts/entrana/entrana.component';
import { InicioComponent } from './posts/inicio/inicio.component';
import { AsiPasoComponent } from './posts/asi-paso/asi-paso.component';
import { DondeDiceComponent } from './posts/donde-dice/donde-dice.component';
import { QueMePerdiComponent } from './posts/que-me-perdi/que-me-perdi.component';
import { QueProponenComponent } from './posts/que-proponen/que-proponen.component';
import { QueSeVieneComponent  } from './posts/que-se-viene/que-se-viene.component';
import { QuienJalaComponent  } from './posts/quien-jala/quien-jala.component';





const routes: Routes = [
  {
    path: 'publicaciones-cartelera',
    component: PostListComponent,
    pathMatch: 'full'
  },

  {
    path: 'publicaciones-musica',
    component: PostListMusicaComponent,
    pathMatch: 'full',
    data: {
      meta: {
        'title': 'Home page',
        'description': 'This is the description shown in Google search results',
        'og:image': 'http://www.culturatrespuntocero.com/images/generales/logo.png'
      }
    }
  },

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
    path: 'publicaciones-cine',
    component: PostListCineComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-libros-revistas',
    component: PostListLibrosRevistasComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-radio-potcast',
    component: PostListRadioPodcastComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-gastronomia',
    component: PostListGastronomiaComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-artesania',
    component: PostListArtesaniaComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-viajes',
    component: PostListViajesComponent,
    pathMatch: 'full'
  },

  {
    path: 'publicaciones-trueques',
    component: PostListTruequesComponent,
    pathMatch: 'full'
  },

  {
    path: 'publicaciones-espacios',
    component: PostListEspaciosComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-exposiciones',
    component: ExposicionesComponent,
    pathMatch: 'full'
  },

   {
    path: 'publicaciones-conferencias-cursos-talleres',
    component: ConferenciasComponent,
    pathMatch: 'full'
  },


  {
    path: ':slug',
    component: PostSingleComponent
  },
  {
    path: 'publicaciones/:slug',
    component: PostSingleNormalComponent
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