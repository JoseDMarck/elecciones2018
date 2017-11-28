/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { QuienJalaComponent } from './quien-jala.component';

describe('QuienJalaComponent', () => {
  let component: QuienJalaComponent;
  let fixture: ComponentFixture<QuienJalaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QuienJalaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QuienJalaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
