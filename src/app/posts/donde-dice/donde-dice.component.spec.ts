/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { DondeDiceComponent } from './donde-dice.component';

describe('DondeDiceComponent', () => {
  let component: DondeDiceComponent;
  let fixture: ComponentFixture<DondeDiceComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DondeDiceComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DondeDiceComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
