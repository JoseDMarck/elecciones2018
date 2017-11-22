/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListLibrosRevistasComponent } from './post-list-libros-revistas.component';

describe('PostListLibrosRevistasComponent', () => {
  let component: PostListLibrosRevistasComponent;
  let fixture: ComponentFixture<PostListLibrosRevistasComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListLibrosRevistasComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListLibrosRevistasComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
