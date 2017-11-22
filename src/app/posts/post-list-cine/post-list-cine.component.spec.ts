/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListCineComponent } from './post-list-cine.component';

describe('PostListCineComponent', () => {
  let component: PostListCineComponent;
  let fixture: ComponentFixture<PostListCineComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListCineComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListCineComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
