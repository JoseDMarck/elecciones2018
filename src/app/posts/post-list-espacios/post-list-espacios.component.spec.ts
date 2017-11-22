/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListEspaciosComponent } from './post-list-espacios.component';

describe('PostListEspaciosComponent', () => {
  let component: PostListEspaciosComponent;
  let fixture: ComponentFixture<PostListEspaciosComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListEspaciosComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListEspaciosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
