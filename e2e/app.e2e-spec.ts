import { Cultura30Page } from './app.po';

describe('cultura30 App', function() {
  let page: Cultura30Page;

  beforeEach(() => {
    page = new Cultura30Page();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
