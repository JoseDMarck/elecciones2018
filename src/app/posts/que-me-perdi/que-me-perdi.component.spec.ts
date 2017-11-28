/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { QueMePerdiComponent } from './que-me-perdi.component';

describe('QueMePerdiComponent', () => {
  let component: QueMePerdiComponent;
  let fixture: ComponentFixture<QueMePerdiComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QueMePerdiComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QueMePerdiComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
