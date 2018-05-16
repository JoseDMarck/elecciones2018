import { Injectable } from '@angular/core';
import { Http, Response } from '@angular/http';
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import { Post } from './post';

@Injectable()
export class PostsService {
  //http://meditarensupabra.com/demos/AudiosCDO/wp-json/wp/v2/ 
private postsUrl = "http://michoacantrespuntocero.com/2018elecciones.com/wp-json/wp/v2/";

  constructor(private http: Http) { }

  getPosts(): Observable<Post[]> {
    	return this.http
      	.get(this.postsUrl + 'posts?categories=15&per_page=12&order=asc')
      	.map((res: Response) => res.json());
	}

  getPostsHome(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts')
        .map((res: Response) => res.json());
  }


  getPostsRelated(id_cat, current_id): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories='+id_cat+'&per_page=6&order=desc&exclude='+current_id)
        .map((res: Response) => res.json());
  }


  

	getPost(slug): Observable<Post> {
        return this.http
        .get(this.postsUrl + `posts?slug=${slug}`)
        .map((res: Response) => res.json());
  }

  getPostNormal(slug): Observable<Post> {
        return this.http
        .get(this.postsUrl + `posts?slug=${slug}`)
        .map((res: Response) => res.json());
  }


  getPostMedia(id): Observable<Post> {
        return this.http
        .get(this.postsUrl + 'media/'+id)
        .map((res: Response) => res.json());
  }


   // LOADMORE SERVICIO
   LoadMorePostsService(id_cat, numero): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories='+id_cat+'&per_page='+numero+'&order=asc')
        .map((res: Response) => res.json());
  }

 

   // LOADMORE SERVICIO
   LoadMorePostsServiceNormal(id_cat, numero): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories='+id_cat+'&per_page='+numero+'&order=desc')
        .map((res: Response) => res.json());
  }

  // LOADMORE HOME
   LoadMorePostsServiceHome( numero): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?per_page='+numero+'&order=desc')
        .map((res: Response) => res.json());
  }

  //GetCategoryCount http://meditarensupabra.com/demos/AudiosCDO//wp-json/wp/v2/categories

   GetCategoryCount(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'categories/15')
        .map((res: Response) => res.json());
  }

 
  getPosts_Entrana(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=29&order=desc')
        .map((res: Response) => res.json());
  }


  getPosts_AsiPaso(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=30&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_DondeDice(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=31&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_QueMePerdi(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=32&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_QueProponen(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=33&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_QueSeViene(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=34&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_QuienJala(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=36&order=desc')
        .map((res: Response) => res.json());
  }

  getPosts_Noticias(): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories=67&order=desc')
        .map((res: Response) => res.json());
  }

  // LOADMORE HOME
   LoadMorePostsServicebyCategory(cat,numero): Observable<Post[]> {
      return this.http
        .get(this.postsUrl + 'posts?categories='+cat+'&per_page='+numero+'&order=desc')
        .map((res: Response) => res.json());
  }

  getPostsSearchFull(): Observable<Post[]> {
    return this.http
      .get(this.postsUrl + 'posts?per_page=300&order=desc')
      .map((res: Response) => res.json());
}

  // LOADMORE HOME
  LoadMorePostsServiceSearch( numero): Observable<Post[]> {
    return this.http
      .get(this.postsUrl + 'posts?per_page='+numero+'&order=desc')
      .map((res: Response) => res.json());
}







}
