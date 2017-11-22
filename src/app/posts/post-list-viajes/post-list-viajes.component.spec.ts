/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListViajesComponent } from './post-list-viajes.component';

describe('PostListViajesComponent', () => {
  let component: PostListViajesComponent;
  let fixture: ComponentFixture<PostListViajesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListViajesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListViajesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
