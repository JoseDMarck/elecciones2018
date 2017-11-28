/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { AsiPasoComponent } from './asi-paso.component';

describe('AsiPasoComponent', () => {
  let component: AsiPasoComponent;
  let fixture: ComponentFixture<AsiPasoComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ AsiPasoComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(AsiPasoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
