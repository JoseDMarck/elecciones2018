/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { PostSingleNormalComponent } from './post-single-normal.component';

describe('PostSingleNormalComponent', () => {
  let component: PostSingleNormalComponent;
  let fixture: ComponentFixture<PostSingleNormalComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PostSingleNormalComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PostSingleNormalComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
