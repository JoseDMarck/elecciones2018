/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostListTruequesComponent } from './post-list-trueques.component';

describe('PostListTruequesComponent', () => {
  let component: PostListTruequesComponent;
  let fixture: ComponentFixture<PostListTruequesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostListTruequesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostListTruequesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
