/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListArtesaniaComponent } from './post-list-artesania.component';

describe('PostListArtesaniaComponent', () => {
  let component: PostListArtesaniaComponent;
  let fixture: ComponentFixture<PostListArtesaniaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListArtesaniaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListArtesaniaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
