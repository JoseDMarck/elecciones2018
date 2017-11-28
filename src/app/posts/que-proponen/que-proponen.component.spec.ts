/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { QueProponenComponent } from './que-proponen.component';

describe('QueProponenComponent', () => {
  let component: QueProponenComponent;
  let fixture: ComponentFixture<QueProponenComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ QueProponenComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(QueProponenComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
