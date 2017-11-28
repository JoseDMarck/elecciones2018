/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { QueSeVieneComponent } from './que-se-viene.component';

describe('QueSeVieneComponent', () => {
  let component: QueSeVieneComponent;
  let fixture: ComponentFixture<QueSeVieneComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QueSeVieneComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QueSeVieneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
