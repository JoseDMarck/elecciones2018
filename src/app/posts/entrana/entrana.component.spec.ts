/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { EntranaComponent } from './entrana.component';

describe('EntranaComponent', () => {
  let component: EntranaComponent;
  let fixture: ComponentFixture<EntranaComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ EntranaComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(EntranaComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
