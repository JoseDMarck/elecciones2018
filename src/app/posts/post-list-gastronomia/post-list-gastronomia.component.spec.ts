/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListGastronomiaComponent } from './post-list-gastronomia.component';

describe('PostListGastronomiaComponent', () => {
  let component: PostListGastronomiaComponent;
  let fixture: ComponentFixture<PostListGastronomiaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListGastronomiaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListGastronomiaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
