/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { ContadorMovilComponent } from './contador-movil.component';

describe('ContadorMovilComponent', () => {
  let component: ContadorMovilComponent;
  let fixture: ComponentFixture<ContadorMovilComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ContadorMovilComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ContadorMovilComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
