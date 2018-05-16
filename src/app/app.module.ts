import { BrowserModule, Title } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { AppComponent } from './app.component';
import { Wpng2RoutingModule } from './app-routing.module';
import { PostSingleComponent } from './posts/post-single/post-single.component';
import { InicioComponent } from './posts/inicio/inicio.component';
import { EntranaComponent } from './posts/entrana/entrana.component';
import { AsiPasoComponent } from './posts/asi-paso/asi-paso.component';
import { DondeDiceComponent } from './posts/donde-dice/donde-dice.component';
import { QueMePerdiComponent } from './posts/que-me-perdi/que-me-perdi.component';
import { QueProponenComponent } from './posts/que-proponen/que-proponen.component';
import { QueSeVieneComponent  } from './posts/que-se-viene/que-se-viene.component';
import { QuienJalaComponent  } from './posts/quien-jala/quien-jala.component';
import { ContadorComponent } from './posts/contador/contador.component';
import { ContadorMovilComponent } from './posts/contador-movil/contador-movil.component';
import { NoticiasComponent  } from './posts/noticias/noticias.component';
import {ShareModule} from 'ng2share/share.module';
import { MenuGeneralComponent } from './posts/menu-general/menu-general.component';
import { BusquedaPageComponent  } from './posts/busqueda-page/busqueda-page.component';

import { RouterModule } from '@angular/router';
import { CeiboShare } from 'ng2-social-share';

import { InfiniteScrollModule } from 'ngx-infinite-scroll';
import { Ng2SearchPipeModule } from 'ng2-search-filter';



@NgModule({
  declarations: [
    AppComponent,
    PostSingleComponent,
    MenuGeneralComponent,
    InicioComponent,
    EntranaComponent,
    AsiPasoComponent,
    DondeDiceComponent,
    QueMePerdiComponent,
    QueProponenComponent,
    QueSeVieneComponent,
    QuienJalaComponent, 
    ContadorComponent,
    NoticiasComponent,
    BusquedaPageComponent,
    ContadorMovilComponent,
    CeiboShare
  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    Wpng2RoutingModule,
    ShareModule,
    InfiniteScrollModule,
    Ng2SearchPipeModule,
    BrowserAnimationsModule
  ],
  providers: [Title],
  bootstrap: [AppComponent]
})


export class AppModule { }
