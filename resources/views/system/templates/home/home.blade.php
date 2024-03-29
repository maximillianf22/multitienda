@extends('system.layouts.global.index')
@section('title', 'plantilla')

@section('content')
  <div class="wrapper">
    <div class="page-header">
      <div class="squares square1"></div>
      <div class="squares square2"></div>
      <div class="squares square3"></div>
      <div class="squares square4"></div>
      <div class="squares square5"></div>
      <div class="squares square6"></div>
      <div class="squares square7"></div>
      <div class="container">
        <div class="content-center brand">
          <h1 class="h1-seo">BLK• PRO</h1>
          <h3>All components</h3>
        </div>
      </div>
    </div>
    <div class="main">
      <div class="section section-basic" id="basic-elements">
        <img src="assets/img/path1.png" class="path">
        <div class="container">
          <h2 class="title">Basic Elements</h2>
          <h3>Buttons</h3>
          <p class="category">Pick your style</p>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary" type="button">Default</button>
              <button class="btn btn-primary btn-round" type="button">Round</button>
              <button class="btn btn-primary btn-round" type="button">
                <i class="tim-icons icon-heart-2"></i> With Icon
              </button>
              <button class="btn btn-primary btn-icon btn-round" type="button">
                <i class="tim-icons icon-heart-2"></i>
              </button>
              <button class="btn btn-primary btn-simple btn-round" type="button">Simple</button>
            </div>
          </div>
          <p class="category">Pick your size</p>
          <div class="row">
            <div class="col-md-10">
              <button class="btn btn-primary btn-sm">Small</button>
              <button class="btn btn-primary">Regular</button>
              <button class="btn btn-primary btn-lg">Large</button>
            </div>
          </div>
          <p class="category">Pick your color</p>
          <div class="row">
            <div class="col-md-12">
              <button class="btn">Default</button>
              <button class="btn btn-primary">Primary</button>
              <button class="btn btn-info">Info</button>
              <button class="btn btn-success">Success</button>
              <button class="btn btn-warning">Warning</button>
              <button class="btn btn-danger">Danger</button>
              <button class="btn btn-neutral">Neutral</button>
            </div>
          </div>
          <br/>
          <h3>Links</h3>
          <div class="row">
            <div class="col-md-8">
              <button class="btn btn-link">Default</button>
              <button class="btn btn-link btn-primary ">Primary</button>
              <button class="btn btn-link btn-info">Info</button>
              <button class="btn btn-link btn-success">Success</button>
              <button class="btn btn-link btn-warning">Warning</button>
              <button class="btn btn-link btn-danger">Danger</button>
            </div>
          </div>
          <!--                 social buttons		         -->
          <div id="social-buttons" class="mt-5">
            <h4>Social Buttons</h4>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <p class="category">Default</p>
                <button class="btn btn-twitter">
                  <i class="fab fa-twitter"></i> Connect with Twitter
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">&nbsp;</p>
                <button class="btn btn-icon btn-round btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <p class="category">Neutral</p>
                <button class="btn btn-icon btn-simple btn-twitter">
                  <i class="fab fa-twitter"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <p class="category">&nbsp;</p>
                <button class="btn btn-simple btn-twitter">
                  <i class="fab fa-twitter"></i> Connect with Twitter
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-facebook">
                  <i class="fab fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-facebook">
                  <i class="fab fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-facebook">
                  <i class="fab fa-facebook"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-facebook">
                  <i class="fab fa-facebook-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-facebook">
                  <i class="fab fa-facebook-square"></i> Share · 2.2k
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-google">
                  <i class="fab fa-google"></i> Share on Google+
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-google">
                  <i class="fab fa-google"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-google">
                  <i class="fab fa-google"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-google">
                  <i class="fab fa-google"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-google">
                  <i class="fab fa-google"></i> Share on Google+
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-linkedin">
                  <i class="fab fa-linkedin"></i> Connect with Linkedin
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-linkedin">
                  <i class="fab fa-linkedin"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-linkedin">
                  <i class="fab fa-linkedin"></i> Connect with Linkedin
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-pinterest">
                  <i class="fab fa-pinterest"></i> Pint it · 212
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-pinterest">
                  <i class="fab fa-pinterest"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-pinterest">
                  <i class="fab fa-pinterest"></i> Pint it · 212
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-youtube">
                  <i class="fab fa-youtube"></i> View on Youtube
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-youtube">
                  <i class="fab fa-youtube"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-youtube">
                  <i class="fab fa-youtube"></i> View on Youtube
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> Repost
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-tumblr">
                  <i class="fab fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-tumblr">
                  <i class="fab fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-tumblr">
                  <i class="fab fa-tumblr-square"> </i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-tumblr">
                  <i class="fab fa-tumblr-square"></i> Repost
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-github">
                  <i class="fab fa-github"></i> Connect with Github
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-github">
                  <i class="fab fa-github"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-github">
                  <i class="fab fa-github"></i> Connect with Github
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-behance">
                  <i class="fab fa-behance-square"></i> Follow us
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-behance">
                  <i class="fab fa-behance"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-behance">
                  <i class="fab fa-behance-square"></i> Follow us
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-dribbble">
                  <i class="fab fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-dribbble">
                  <i class="fab fa-dribbble"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-dribbble">
                  <i class="fab fa-dribbble"></i> Find us on Dribble
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <button class="btn btn-reddit">
                  <i class="fab fa-reddit"></i> Repost · 232
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon  btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-round btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-1 col-sm-1">
                <button class="btn btn-icon btn-simple btn-reddit">
                  <i class="fab fa-reddit"></i>
                </button>
              </div>
              <div class="col-md-3 col-sm-4">
                <button class="btn btn-simple btn-reddit">
                  <i class="fab fa-reddit"></i> Repost · 232
                </button>
              </div>|
            </div>
          </div>
          <!--                 end social buttons -->
          <div class="space-70"></div>
          <div id="inputs">
            <h3>Inputs</h3>
            <p class="category">Form Controls</p>
            <div class="row">
              <div class="col-sm-6 col-lg-3">
                <div class="form-group">
                  <input type="text" value="" placeholder="Regular" class="form-control" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="form-group has-success">
                  <input type="text" value="Success" class="form-control form-control-success" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="form-group has-danger">
                  <input type="email" value="Error Input" class="form-control form-control-danger" />
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Left Font Awesome Icon">
                </div>
              </div>
              <div class="col-sm-6 col-lg-3">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Right Nucleo Icon">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="tim-icons icon-lock-circle"></i></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="space-70"></div>
          <!--                 select -->
          <div class="select">
            <div class="row">
              <div class="col-md-6">
                <div class="title">
                  <h4>Customizable Select</h4>
                </div>
                <div class="row">
                  <div class="col-lg-6 col-md-8 col-sm-5">
                    <select class="selectpicker" data-size="7" data-style="btn btn-primary btn-simple" title="Single Select">
                      <option disabled selected>Single Option</option>
                      <option value="2">Foobar</option>
                      <option value="3">Is great</option>
                    </select>
                  </div>
                  <div class="col-lg-6 col-md-8 col-sm-5">
                    <select class="selectpicker" data-style="btn btn-info btn-simple" multiple title="Choose City" data-size="7">
                      <option disabled> Multiple Options</option>
                      <option value="2">Paris </option>
                      <option value="3">Bucharest</option>
                      <option value="4">Rome</option>
                      <option value="5">New York</option>
                      <option value="6">Miami </option>
                      <option value="7">Piatra Neamt</option>
                      <option value="8">Paris </option>
                      <option value="9">Bucharest</option>
                      <option value="10">Rome</option>
                      <option value="11">New York</option>
                      <option value="12">Miami </option>
                      <option value="13">Piatra Neamt</option>
                      <option value="14">Paris </option>
                      <option value="15">Bucharest</option>
                      <option value="16">Rome</option>
                      <option value="17">New York</option>
                      <option value="18">Miami </option>
                      <option value="19">Piatra Neamt</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="title">
                  <h4>Dropdown & Dropup</h4>
                </div>
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-3">
                    <div class="dropdown">
                      <button class="btn btn-primary dropdown-toggle btn-block" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </button>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-3">
                    <div class="dropup">
                      <button class="btn btn-primary dropdown-toggle btn-block" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropup
                      </button>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--                 end select -->
          <div class="space-70"></div>
          <!--				 textarea/tags -->
          <div id="textareaTags">
            <div class="row">
              <div class="col-md-6">
                <div class="title">
                  <h4>Textarea</h4>
                </div>
                <textarea class="form-control" name="name" rows="4" cols="80" placeholder="You can write your text here..."></textarea>
              </div>
              <div class="col-md-6">
                <div class="title">
                  <h4>Tags</h4>
                </div>
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing" class="tagsinput" data-role="tagsinput" data-color="danger" />
                <!-- You can change data-color="rose" with one of our colors primary | warning | info | danger | success -->
              </div>
            </div>
          </div>
          <div class="space-70"></div>
          <div class="row" id="checkRadios">
            <div class="col-sm-6 col-lg-3">
              <p class="category">Checkboxes</p>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox">
                  <span class="form-check-sign"></span>
                  Unchecked
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" checked>
                  <span class="form-check-sign"></span>
                  Checked
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" disabled>
                  <span class="form-check-sign"></span>
                  Disabled Unchecked
                </label>
              </div>
              <div class="form-check disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="checkbox" checked disabled>
                  <span class="form-check-sign"></span>
                  Disabled Checked
                </label>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <p class="category">Radios</p>
              <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                  <span class="form-check-sign"></span>
                  Radio is off
                </label>
              </div>
              <div class="form-check form-check-radio">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option2" checked>
                  <span class="form-check-sign"></span>
                  Radio is on
                </label>
              </div>
              <div class="form-check form-check-radio disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option3" disabled>
                  <span class="form-check-sign"></span>
                  Disabled radio is off
                </label>
              </div>
              <div class="form-check form-check-radio disabled">
                <label class="form-check-label">
                  <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option4" disabled checked>
                  <span class="form-check-sign"></span>
                  Disabled radio is on
                </label>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <p class="category">Toggle Buttons</p>
              <input type="checkbox" name="checkbox" class="bootstrap-switch" checked/>
              <br>
              <input type="checkbox" name="checkbox" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" />
            </div>
            <div class="col-sm-6 col-lg-3">
              <p class="category">Sliders</p>
              <div id="sliderRegular" class="slider"></div>
              <br>
              <div id="sliderDouble" class="slider slider-primary"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-navbars">
        <img src="assets/img/path3.png" class="path">
        <div class="container" id="menu-dropdown">
          <div class="row">
            <div class="col-md-6">
              <h4>Menu</h4>
              <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container">
                  <a class="navbar-brand" href="javascript:;">Icons</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons-1">
                    <div class="navbar-collapse-header">
                      <div class="row">
                        <div class="col-6 collapse-brand">
                          <a>
                            BLK•
                            <span> PRO </span>
                          </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-icons-1" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="tim-icons icon-send" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="tim-icons icon-single-02" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="javascript:;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="tim-icons icon-settings-gear-63" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-header">Dropdown header</a>
                          <a class="dropdown-item" href="javascript:;">Action</a>
                          <a class="dropdown-item" href="javascript:;">Another action</a>
                          <a class="dropdown-item" href="javascript:;">Something else here</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="javascript:;">Separated link</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="javascript:;">One more separated link</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-md-6">
              <h4>Menu with Icons</h4>
              <nav class="navbar navbar-expand-lg bg-info">
                <div class="container">
                  <a class="navbar-brand" href="javascript:;">Icons</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons-2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons-2">
                    <div class="navbar-collapse-header">
                      <div class="row">
                        <div class="col-6 collapse-brand">
                          <a>
                            BLK•
                            <span> PRO </span>
                          </a>
                        </div>
                        <div class="col-6 collapse-close text-right">
                          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-icons-2" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="tim-icons icon-simple-remove"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="tim-icons icon-send" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="javascript:;"><i class="tim-icons icon-single-02" aria-hidden="true"></i></a>
                      </li>
                      <li class="nav-item dropdown">
                        <a href="javascript:;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="tim-icons icon-settings-gear-63" aria-hidden="true"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-header">Dropdown header</a>
                          <a class="dropdown-item" href="javascript:;">Action</a>
                          <a class="dropdown-item" href="javascript:;">Another action</a>
                          <a class="dropdown-item" href="javascript:;">Something else here</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="javascript:;">Separated link</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="javascript:;">One more separated link</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
          <h3 class="title mb-3">Navigation</h3>
        </div>
        <div id="navbar">
          <div class="navigation-example">
            <!-- Navbar Primary  -->
            <nav class="navbar navbar-expand-lg bg-primary">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Primary color</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-primary">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-world"></i> Discover
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-single-02"></i> Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-settings-gear-63"></i> Settings
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Primary -->
            <!-- Navbar Info -->
            <nav class="navbar navbar-expand-lg bg-info">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Info Color</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-info">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-info" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="javascript:;">
                        Discover
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        Settings
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Info -->
            <!-- Navbar Success -->
            <nav class="navbar navbar-expand-lg bg-success">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Success Color</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-success">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-success" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-world"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-single-02"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="tim-icons icon-settings-gear-63"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Success -->
            <!-- Navbar Warning -->
            <nav class="navbar navbar-expand-lg bg-warning">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Warning Color</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-warning" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-warning">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-warning" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-facebook-square"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-google-plus"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Warning -->
            <!-- Navbar Danger -->
            <nav class="navbar navbar-expand-lg bg-danger">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Danger Color</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-danger" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-danger">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-danger" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-facebook-square"></i> Share
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-twitter"></i> Tweet
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-pinterest"></i> Pin
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Danger -->
            <!-- Navbar Transparent -->
            <nav class="navbar navbar-expand-lg navbar-transparent">
              <div class="container">
                <div class="navbar-translate">
                  <a class="navbar-brand" href="javascript:;">Transparent</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-transparent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <div class="collapse navbar-collapse" id="example-navbar-transparent">
                  <div class="navbar-collapse-header">
                    <div class="row">
                      <div class="col-6 collapse-brand">
                        <a>
                          BLK•
                          <span> PRO </span>
                        </a>
                      </div>
                      <div class="col-6 collapse-close text-right">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#example-navbar-transparent" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="tim-icons icon-simple-remove"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-facebook-square"></i> Facebook
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-twitter"></i> Twitter
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="javascript:;">
                        <i class="fab fa-instagram"></i> Instagram
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- End Navbar Transparent-->
          </div>
        </div>
      </div>
      <!-- End .section-navbars  -->
      <div class="section section-tabs">
        <div class="container">
          <div class="title">
            <h3 class="mb-3">Navigation Tabs</h3>
          </div>
          <div class="row">
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With icons</small>
              </div>
              <!-- Nav tabs -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#link1" role="tablist">
                        <i class="tim-icons icon-spaceship"></i> Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                        <i class="tim-icons icon-settings-gear-63"></i> Settings
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                        <i class="tim-icons icon-bag-16"></i> Options
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="link1">
                      <p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        <br />
                        <br/> Dramatically visualize customer directed convergence without revolutionary ROI.</p>
                    </div>
                    <div class="tab-pane" id="link2">
                      <p>Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br />
                        <br/>Dynamically innovate resource-leveling customer service for state of the art customer service.</p>
                    </div>
                    <div class="tab-pane" id="link3">
                      <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                        <br />
                        <br/> Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-10 ml-auto col-xl-6 mr-auto">
              <div class="mb-3">
                <small class="text-uppercase font-weight-bold">With text</small>
              </div>
              <!-- Tabs with Background on Card -->
              <div class="card">
                <div class="card-header">
                  <ul class="nav nav-tabs nav-tabs-primary" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" data-toggle="tab" href="#link4" role="tablist">
                        Profile
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                        Settings
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" data-toggle="tab" href="#link6" role="tablist">
                        Options
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body">
                  <!-- Tab panes -->
                  <div class="tab-content tab-space">
                    <div class="tab-pane active" id="link4">
                      <p> These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided.
                        <br/>But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures</p>
                    </div>
                    <div class="tab-pane" id="link5">
                      <p> I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. </p>
                    </div>
                    <div class="tab-pane" id="link6">
                      <p>I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. So when you get something that has the name Kanye West on it, it’s supposed to be pushing the furthest possibilities. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus.</p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Tabs on plain Card -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Section Tabs -->
      <div class="section section-pills">
        <div class="container">
          <div id="navigation-pills">
            <div class="title">
              <h4>Navigation Pills</h4>
            </div>
            <div class="row">
              <div class="col-md-6">
                <p class="category">Horizontal tabs</p>
                <ul class="nav nav-pills nav-pills-primary" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link11" role="tablist">
                      Profile
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link12" role="tablist">
                      Settings
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link13" role="tablist">
                      Options
                    </a>
                  </li>
                </ul>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="link11">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br />
                    <br /> Dramatically visualize customer directed convergence without revolutionary ROI.
                  </div>
                  <div class="tab-pane" id="link12">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br />
                    <br />Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                  <div class="tab-pane" id="link13">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br />
                    <br />Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <p class="category">Vertical tabs</p>
                <div class="row">
                  <div class="col-md-4">
                    <ul class="nav nav-pills nav-pills-primary flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link41" role="tablist">
                          Profile
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link51" role="tablist">
                          Settings
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link61" role="tablist">
                          Options
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                    <div class="tab-content">
                      <div class="tab-pane active" id="link41">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        <br>
                        <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                      </div>
                      <div class="tab-pane" id="link51">
                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                        <br>
                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                      </div>
                      <div class="tab-pane" id="link61">
                        Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                        <br>
                        <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="title">
              <p class="category">With Icons</p>
            </div>
            <div class="row">
              <div class="col-md-6">
                <!--
								color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
							-->
                <ul class="nav nav-pills nav-pills-primary nav-pills-icons" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                      <i class="tim-icons icon-spaceship"></i> Home
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                      <i class="tim-icons icon-bag-16"></i> Messages
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link9" role="tablist">
                      <i class="tim-icons icon-settings"></i> Settings
                    </a>
                  </li>
                </ul>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="link7">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br>
                    <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                  </div>
                  <div class="tab-pane" id="link8">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br>
                    <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                  <div class="tab-pane" id="link9">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br>
                    <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-lg-3 col-md-6">
                    <!--
										color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
									-->
                    <ul class="nav nav-pills nav-pills-primary nav-pills-icons flex-column" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link110" role="tablist">
                          <i class="tim-icons icon-spaceship"></i> Home
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link111" role="tablist">
                          <i class="tim-icons icon-settings"></i> Settings
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                    <div class="tab-content">
                      <div class="tab-pane active" id="link110">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        <br>
                        <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                      </div>
                      <div class="tab-pane" id="link111">
                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                        <br>
                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="title">
              <p class="category">Just Icons</p>
            </div>
            <div class="row">
              <div class="col-md-6 mb-5">
                <div class="row">
                  <div class="col-md-3">
                    <!--
										color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
									-->
                    <ul class="nav nav-pills nav-pills-info nav-pills-just-icons" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#link20" role="tablist">
                          <i class="tim-icons icon-spaceship"></i>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link21" role="tablist">
                          <i class="tim-icons icon-settings"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-8">
                    <div class="tab-content">
                      <div class="tab-pane active" id="link20">
                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                        <br>
                        <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                      </div>
                      <div class="tab-pane" id="link21">
                        Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                        <br>
                        <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <!--
								color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
							-->
                <ul class="nav nav-pills nav-pills-info nav-pills-just-icons" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#link22" role="tablist">
                      <i class="tim-icons icon-spaceship"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link23" role="tablist">
                      <i class="tim-icons icon-bag-16"></i>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#link24" role="tablist">
                      <i class="tim-icons icon-settings"></i>
                    </a>
                  </li>
                </ul>
                <div class="tab-content tab-space">
                  <div class="tab-pane active" id="link22">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits.
                    <br>
                    <br> Dramatically visualize customer directed convergence without revolutionary ROI.
                  </div>
                  <div class="tab-pane" id="link23">
                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                    <br>
                    <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                  </div>
                  <div class="tab-pane" id="link24">
                    Completely synergize resource taxing relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas.
                    <br>
                    <br>Dynamically innovate resource-leveling customer service for state of the art customer service.
                  </div>
                </div>
              </div>
            </div>
            <!--                 end nav pills -->
          </div>
        </div>
      </div>
      <div class="section section-pagination">
        <img src="assets/img/path4.png" class="path">
        <img src="assets/img/path5.png" class="path path1">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3 class="mb-4">Progress Bars</h3>
              <div class="progress-container">
                <span class="progress-badge">Default</span>
                <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    <span class="progress-value">25%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-primary">
                <span class="progress-badge">Primary</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-danger">
                <span class="progress-badge">Danger</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-warning">
                <span class="progress-badge">Warning</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-success">
                <span class="progress-badge">Success</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
              <div class="progress-container progress-info">
                <span class="progress-badge">Info</span>
                <div class="progress">
                  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                    <span class="progress-value">60%</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 offset-md-1">
              <h3 class="mb-5">Pagination</h3>
              <ul class="pagination pagination-primary">
                <li class="page-item active">
                  <a class="page-link" href="javascript:;">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">5</a>
                </li>
              </ul>
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Previous">
                    <span aria-hidden="true"><i class="tim-icons icon-double-left" aria-hidden="true"></i></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#link">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#link" aria-label="Next">
                    <span aria-hidden="true"><i class="tim-icons icon-double-right" aria-hidden="true"></i></span>
                  </a>
                </li>
              </ul>
              <div class="pagination-container justify-content-center">
                <ul class="pagination pagination-primary">
                  <li class="page-item">
                    <a class="page-link" href="javascript:;" aria-label="Previous">
                      <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">2</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="javascript:;">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:;" aria-label="Next">
                      <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                    </a>
                  </li>
                </ul>
              </div>
              <br>
              <h3 class="mb-5">Labels</h3>
              <span class="badge badge-default">Default</span>
              <span class="badge badge-primary">Primary</span>
              <span class="badge badge-success">Success</span>
              <span class="badge badge-info">Info</span>
              <span class="badge badge-warning">Warning</span>
              <span class="badge badge-danger">Danger</span>
              <span class="badge badge-neutral">Neutral</span>
            </div>
          </div>
          <br>
        </div>
      </div>
      <div class="section section-notifications" id="notifications">
        <div class="container">
          <div class="space"></div>
          <h3>Notifications</h3>
          <div class="alert alert-primary alert-with-icon">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
            <span data-notify="icon" class="tim-icons icon-coins"></span>
            <span>
              <b> Congrats! - </b> This is a regular notification made with ".alert-primary"</span>
          </div>
          <div class="alert alert-info alert-with-icon">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
            <span data-notify="icon" class="tim-icons icon-trophy"></span>
            <span>
              <b> Heads up! - </b> This is a regular notification made with ".alert-info"</span>
          </div>
          <div class="alert alert-success alert-with-icon">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
            <span data-notify="icon" class="tim-icons icon-bell-55"></span>
            <span>
              <b> Well done! - </b> This is a regular notification made with ".alert-success"</span>
          </div>
          <div class="alert alert-warning alert-with-icon">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
            <span data-notify="icon" class="tim-icons icon-bulb-63"></span>
            <span>
              <b> Warning! - </b> This is a regular notification made with ".alert-warning"</span>
          </div>
          <div class="alert alert-danger alert-with-icon">
            <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
              <i class="tim-icons icon-simple-remove"></i>
            </button>
            <span data-notify="icon" class="tim-icons icon-support-17"></span>
            <span>
              <b> Oh snap! - </b> This is a regular notification made with ".alert-danger"</span>
          </div>
        </div>
      </div>
      <!--  end notifications -->
      <div class="section section-pre-footer">
        <div id="pre-footer-areas">
          <div class="container">
            <div class="title">
              <h3>Pre-Footer Areas</h3>
            </div>
          </div>
          <!--     *********    SIMPLE SOCIAL LINE     *********      -->
          <div class="social-line social-line-blue text-center">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <h4 class="title">Thank you for your support!</h4>
                </div>
                <a href="javascript:;" class="btn btn-twitter btn-round">
                  <i class="fab fa-twitter"></i> Twitter · 2.5k
                </a>
                <a href="javascript:;" class="btn btn-facebook btn-round">
                  <i class="fab fa-facebook-square"></i> Facebook · 3.2k
                </a>
                <a href="javascript:;" class="btn btn-google btn-round">
                  <i class="fab fa-google-plus"></i> Google · 1.2k
                </a>
                <a href="javascript:;" class="btn btn-dribbble btn-round">
                  <i class="fab fa-dribbble"></i> Dribbble · 1.8k
                </a>
              </div>
            </div>
          </div>
          <!--     *********   SIMPLE SOCIAL LINE     *********      -->
          <br>
          <br>
          <!--     *********    SIMPLE SOCIAL LINE     *********      -->
          <div class="social-line social-line-big-icons">
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-twitter btn-footer">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-facebook btn-footer">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-google btn-footer">
                    <i class="fab fa-google-plus"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-dribbble btn-footer">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-youtube btn-footer">
                    <i class="fab fa-youtube"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-icon btn-simple btn-instagram btn-footer">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!--     *********   SIMPLE SOCIAL LINE     *********      -->
          <br>
          <br>
          <!--     *********    SIMPLE BLACK SOCIAL LINE     *********      -->
          <div class="social-line social-line-big-icons">
            <div class="container">
              <div class="row">
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-twitter"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-google-plus"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-youtube"></i>
                  </a>
                </div>
                <div class="col-md-2">
                  <a href="javascript:;" class="btn btn-simple btn-icon btn-footer">
                    <i class="fab fa-instagram"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>
          <!--     *********   SIMPLE BLACK SOCIAL LINE     *********      -->
          <br>
          <br>
          <!--     *********    SIMPLE SUBSCRIBE LINE     *********      -->
          <div class="subscribe-line subscribe-line-white">
            <div class="container">
              <div class="row">
                <div class="col-lg-6">
                  <h4 class="title">Get Tips &amp; Tricks every Week!</h4>
                  <p class="description">
                    Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                  </p>
                </div>
                <div class="col-lg-6">
                  <div class="card card-plain card-form-horizontal">
                    <div class="card-body">
                      <form method="" action="">
                        <div class="row">
                          <div class="col-sm-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Your Email...">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--     *********   SIMPLE SUBSCRIBE LINE     *********      -->
          <br>
          <br>
          <!--     *********    IMAGE SUBSCRIBE LINE     *********      -->
          <div class="subscribe-line">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-sm-10 ml-auto mr-auto">
                  <div class="text-center">
                    <h4 class="title">Subscribe to our Newsletter</h4>
                    <p class="description">
                      Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                  </div>
                  <div class="card card-raised card-form-horizontal">
                    <div class="card-body">
                      <form method="" action="">
                        <div class="row">
                          <div class="col-sm-8">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"><i class="tim-icons icon-email-85"></i></span>
                              </div>
                              <input type="email" class="form-control" placeholder="Your Email...">
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <button type="button" class="btn btn-primary btn-round btn-block">Subscribe</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--     *********   IMAGE SUBSCRIBE LINE     *********      -->
        </div>
      </div>
      <!--         footer areas	     -->
      <div class="section section-footers" data-background-color="gray">
        <div class="container">
          <div class="title">
            <h3>Footer Areas</h3>
          </div>
        </div>
        <div id="footer-areas">
          <!--     *********    SIMPLE FOOTER WITH SOCIAL AND BRAND     *********      -->
          <footer class="footer">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <h1 class="title">BLK•</h1>
                </div>
                <div class="col-md-3">
                  <ul class="nav">
                    <li class="nav-item">
                      <a href="/index.html" class="nav-link">
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/examples/landing-page.html" class="nav-link">
                        Landing
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/examples/register-page.html" class="nav-link">
                        Register
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/examples/profile-page.html" class="nav-link">
                        Profile
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <ul class="nav">
                    <li class="nav-item">
                      <a href="https://creative-tim.com/contact-us" class="nav-link">
                        Contact Us
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="https://creative-tim.com/about-us" class="nav-link">
                        About Us
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="https://creative-tim.com/blog" class="nav-link">
                        Blog
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="https://opensource.org/licenses/MIT" class="nav-link">
                        License
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <h3 class="title">Follow us:</h3>
                  <div class="btn-wrapper profile text-left">
                    <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us">
                      <i class="fab fa-dribbble"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </footer>
          <!--     *********   END SIMPLE FOOTER WITH SOCIAL AND BRAND     *********      -->
          <!--     *********    SIMPLE FOOTER     *********      -->
          <footer class="footer footer-simple">
            <div class="container">
              <nav>
                <ul>
                  <li>
                    <a href="https://www.creative-tim.com" class="nav-link">
                      Creative Tim
                    </a>
                  </li>
                  <li>
                    <a href="http://presentation.creative-tim.com" class="nav-link">
                      About Us
                    </a>
                  </li>
                  <li>
                    <a href="http://blog.creative-tim.com" class="nav-link">
                      Blog
                    </a>
                  </li>
                  <li>
                    <a href="https://www.creative-tim.com/license" target="_blank" class="nav-link">
                      License
                    </a>
                  </li>
                </ul>
              </nav>
              <div class="copyright">
                &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script>, Designed by
                <a href="http://www.invisionapp.com" target="_blank" class="copyright-link">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank" class="copyright-link">Creative Tim</a>.
              </div>
            </div>
          </footer>
          <!--     *********   END SIMPLE FOOTER     *********      -->
          <!--     *********    BLACK SIMPLE FOOTER WITH SOCIAL AND BRAND     *********      -->
          <footer class="footer" data-background-color="black">
            <div class="container">
              <a class="footer-brand" href="javascript:;">BLK• Design System PRO</a>
              <ul class="pull-center">
                <li>
                  <a href="javascript:;">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Presentation
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Discover
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Payment
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Contact Us
                  </a>
                </li>
              </ul>
              <ul class="social-buttons pull-right">
                <li>
                  <a href="https://twitter.com/CreativeTim" target="_blank" class="btn btn-icon btn-link btn-neutral">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.facebook.com/CreativeTim" target="_blank" class="btn btn-icon btn-neutral btn-link">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/CreativeTimOfficial" target="_blank" class="btn btn-icon btn-neutral btn-link">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>
            </div>
          </footer>
          <!--     *********   END BLACK SIMPLE FOOTER WITH SOCIAL AND BRAND     *********      -->
          <!--     *********    BIG FOOTER     *********      -->
          <footer class="footer footer-big footer-white">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <h4>About Us</h4>
                    <p>Creative Tim is a startup that creates design tools that make the web development process faster and easier. </p>
                    <p>We love the web and care deeply for how users interact with a digital product. We power businesses and individuals to create better looking web projects around the world. </p>
                  </div>
                  <div class="col-md-4">
                    <h4>Social Feed</h4>
                    <div class="social-feed">
                      <div class="feed-line">
                        <i class="fab fa-instagram"></i>
                        <p>How to handle ethical disagreements with your clients.</p>
                      </div>
                      <div class="feed-line">
                        <i class="fab fa-twitter"></i>
                        <p>The tangible benefits of designing at 1x pixel density.</p>
                      </div>
                      <div class="feed-line">
                        <i class="fab fa-facebook-square"></i>
                        <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h4>Instagram Feed</h4>
                    <div class="gallery-feed">
                      <img src="assets/img/olivia.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/johana.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/michael.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/emily.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/marie.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/usher.jpg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/mike.jpeg" class="img img-raised rounded" alt="" />
                      <img src="assets/img/julie.jpg" class="img img-raised rounded" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <hr />
              <ul class="pull-left">
                <li>
                  <a href="javascript:;">
                    Blog
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Presentation
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Discover
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Payment
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    Contact Us
                  </a>
                </li>
              </ul>
              <div class="copyright pull-right">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
              </div>
            </div>
          </footer>
          <!--     *********   END BIG FOOTER     *********      -->
          <!--     *********    BIG FOOTER     *********      -->
          <footer class="footer footer-big" data-background-color="black">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-2">
                    <h5>About Us</h5>
                    <ul class="links-vertical">
                      <li>
                        <a href="javascript:;">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          About Us
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Contact Us
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <h5>Market</h5>
                    <ul class="links-vertical">
                      <li>
                        <a href="javascript:;">
                          Sales FAQ
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          How to Register
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Sell Goods
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Receive Payment
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Transactions Issues
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Affiliates Program
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-4">
                    <h5>Social Feed</h5>
                    <div class="social-feed">
                      <div class="feed-line">
                        <i class="fab fa-twitter"></i>
                        <p>How to handle ethical disagreements with your clients.</p>
                      </div>
                      <div class="feed-line">
                        <i class="fab fa-twitter"></i>
                        <p>The tangible benefits of designing at 1x pixel density.</p>
                      </div>
                      <div class="feed-line">
                        <i class="fab fa-facebook-square"></i>
                        <p>A collection of 25 stunning sites that you can use for inspiration.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <h5>Follow Us</h5>
                    <ul class="social-buttons">
                      <li>
                        <a href="javascript:;" class="btn btn-icon btn-twitter btn-round">
                          <i class="fab fa-twitter"></i>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" class="btn btn-icon btn-facebook btn-round">
                          <i class="fab fa-facebook-square"></i>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round">
                          <i class="fab fa-dribbble"></i>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" class="btn btn-icon btn-google btn-round">
                          <i class="fab fa-google-plus"></i>
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;" class="btn btn-icon btn-instagram btn-round">
                          <i class="fab fa-instagram"></i>
                        </a>
                      </li>
                    </ul>
                    <h5 class="mt-4">Numbers Don't Lie</h5>
                    <h5>14.521
                      <small class="text-muted">Freelancers</small>
                    </h5>
                    <h5>1.423.183
                      <small class="text-muted">Transactions</small>
                    </h5>
                  </div>
                </div>
              </div>
              <hr />
              <div class="copyright">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
              </div>
            </div>
          </footer>
          <!--     *********   END BIG FOOTER     *********      -->
          <!--     *********    BIG WHITE FOOTER V2     *********      -->
          <footer class="footer footer-white footer-big">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-md-3">
                    <a href="javascript:;">
                      <h5>BLK• Design System PRO</h5>
                    </a>
                    <p>Probably the best Design System in the world! We know you've been waiting for it, so don't be shy!</p>
                  </div>
                  <div class="col-md-2">
                    <h5>About</h5>
                    <ul class="links-vertical">
                      <li>
                        <a href="javascript:;">
                          Blog
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          About Us
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Presentation
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Contact Us
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <h5>Market</h5>
                    <ul class="links-vertical">
                      <li>
                        <a href="javascript:;">
                          Sales FAQ
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          How to Register
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Sell Goods
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Receive Payment
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Transactions Issues
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <h5>Legal</h5>
                    <ul class="links-vertical">
                      <li>
                        <a href="javascript:;">
                          Transactions FAQ
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Terms & Conditions
                        </a>
                      </li>
                      <li>
                        <a href="javascript:;">
                          Licenses
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <h5>Subscribe to Newsletter</h5>
                    <p>
                      Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.
                    </p>
                    <form class="form form-newsletter" method="" action="">
                      <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your Email...">
                      </div>
                      <button type="button" class="btn btn-primary btn-icon btn-round" name="button">
                        <i class="tim-icons icon-email-85"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </div>
              <hr />
              <ul class="social-buttons">
                <li>
                  <a href="javascript:;" class="btn btn-icon btn-twitter btn-lg">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="btn btn-icon btn-facebook btn-lg">
                    <i class="fab fa-facebook-square"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="btn btn-icon btn-dribbble btn-lg">
                    <i class="fab fa-dribbble"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="btn btn-icon btn-google btn-lg">
                    <i class="fab fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="javascript:;" class="btn btn-icon btn-youtube btn-lg">
                    <i class="fab fa-youtube"></i>
                  </a>
                </li>
              </ul>
              <div class="copyright pull-center">
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear())
                </script> Creative Tim All Rights Reserved.
              </div>
            </div>
          </footer>
          <!--     *********   END BIG WHITE FOOTER v2     *********      -->
        </div>
      </div>
      <!--         footer areas         -->
      <!-- Typography -->
      <div class="section section-typo">
        <img src="assets/img/path1.png" class="path">
        <img src="assets/img/path3.png" class="path path1">
        <div class="container">
          <h3 class="title">Typography</h3>
          <div id="typography">
            <div class="row">
              <div class="col-md-12">
                <div class="typography-line">
                  <h1>
                    <span>Header 1</span>The Life of BLK• Design System </h1>
                </div>
                <div class="typography-line">
                  <h2>
                    <span>Header 2</span>The Life of BLK• Design System</h2>
                </div>
                <div class="typography-line">
                  <h3>
                    <span>Header 3</span>The Life of BLK• Design System</h3>
                </div>
                <div class="typography-line">
                  <h4>
                    <span>Header 4</span>The Life of BLK• Design System</h4>
                </div>
                <div class="typography-line">
                  <h5>
                    <span>Header 5</span>The Life of BLK• Design System</h5>
                </div>
                <div class="typography-line">
                  <h6>
                    <span>Header 6</span>The Life of BLK• Design System</h6>
                </div>
                <div class="typography-line">
                  <p>
                    <span>Paragraph</span>
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.
                  </p>
                </div>
                <div class="typography-line">
                  <span>Quote</span>
                  <blockquote>
                    <p class="blockquote blockquote-primary">
                      "I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at."
                      <br>
                      <br>
                      <small>
                        - Noaa
                      </small>
                    </p>
                  </blockquote>
                </div>
                <div class="typography-line">
                  <span>Muted Text</span>
                  <p class="text-muted">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Primary Text</span>
                  <p class="text-primary">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...</p>
                </div>
                <div class="typography-line">
                  <span>Info Text</span>
                  <p class="text-info">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Success Text</span>
                  <p class="text-success">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <span>Warning Text</span>
                  <p class="text-warning">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers...
                  </p>
                </div>
                <div class="typography-line">
                  <span>Danger Text</span>
                  <p class="text-danger">
                    I will be the leader of a company that ends up being worth billions of dollars, because I got the answers... </p>
                </div>
                <div class="typography-line">
                  <h2>
                    <span>Small Tag</span>
                    Header with small subtitle
                    <br>
                    <small>Use "small" tag for the headers</small>
                  </h2>
                </div>
              </div>
            </div>
          </div>
          <div class="space-50"></div>
          <div id="images">
            <h3 class="mb-5">Images</h3>
            <div class="row">
              <div class="col-sm-3 col-6">
                <small class="d-block text-uppercase font-weight-bold mb-4">Image</small>
                <img src="assets/img/christian.jpg" alt="Rounded image" class="img-fluid rounded shadow" style="width: 150px;">
              </div>
              <div class="col-sm-3 col-6">
                <small class="d-block text-uppercase font-weight-bold mb-4">Circle Image</small>
                <img src="assets/img/james.jpg" alt="Circle image" class="img-fluid rounded-circle shadow" style="width: 150px;">
              </div>
              <div class="col-sm-3 col-6 mt-5 mt-sm-0">
                <small class="d-block text-uppercase font-weight-bold mb-4">Raised</small>
                <img src="assets/img/lora.jpg" alt="Raised image" class="img-fluid rounded shadow-lg" style="width: 150px;">
              </div>
              <div class="col-sm-3 col-6 mt-5 mt-sm-0">
                <small class="d-block text-uppercase font-weight-bold mb-4">Circle Raised</small>
                <img src="assets/img/mike.jpeg" alt="Raised circle image" class="img-fluid rounded-circle shadow-lg" style="width: 150px;">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="space-70"></div>
          <div id="contentAreas" class="cd-section">
            <h3 class="title">Content Areas</h3>
            <!--                 tables -->
            <div id="tables">
              <div class="title">
                <h3>
                  <small>Tables</small>
                </h3>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h4>
                    <small>Simple Table</small>
                  </h4>
                </div>
                <div class="col-md-8 ml-auto mr-auto">
                  <h6>Simple With Actions</h6>
                  <div class="card  card-plain">
                    <div class="card-header">
                      <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table tablesorter " id="">
                          <thead class="">
                            <tr>
                              <th class="text-center">
                                #
                              </th>
                              <th>
                                Name
                              </th>
                              <th>
                                Job Position
                              </th>
                              <th class="text-center">
                                Since
                              </th>
                              <th class="text-right">
                                Salary
                              </th>
                              <th class="text-right">
                                Actions
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">
                                1
                              </td>
                              <td>
                                Andrew Mike
                              </td>
                              <td>
                                Develop
                              </td>
                              <td class="text-center">
                                2013
                              </td>
                              <td class="text-right">
                                € 99,225
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                2
                              </td>
                              <td>
                                John Doe
                              </td>
                              <td>
                                Design
                              </td>
                              <td class="text-center">
                                2012
                              </td>
                              <td class="text-right">
                                € 89,241
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                3
                              </td>
                              <td>
                                Alex Mike
                              </td>
                              <td>
                                Design
                              </td>
                              <td class="text-center">
                                2010
                              </td>
                              <td class="text-right">
                                € 92,144
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                4
                              </td>
                              <td>
                                Mike Monday
                              </td>
                              <td>
                                Marketing
                              </td>
                              <td class="text-center">
                                2013
                              </td>
                              <td class="text-right">
                                € 49,990
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                5
                              </td>
                              <td>
                                Paul Dickens
                              </td>
                              <td>
                                Communication
                              </td>
                              <td class="text-center">
                                2015
                              </td>
                              <td class="text-right">
                                € 69,201
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                6
                              </td>
                              <td>
                                Manuel Rico
                              </td>
                              <td>
                                Manager
                              </td>
                              <td class="text-center">
                                2012
                              </td>
                              <td class="text-right">
                                € 99,201
                              </td>
                              <td class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-single-02"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-settings"></i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-icon btn-sm   btn-simple  ">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                  <h6>Striped With Checkboxes</h6>
                  <div class="card  card-plain">
                    <div class="card-header">
                      <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table tablesorter  table-striped" id="">
                          <thead class="">
                            <tr>
                              <th class="text-center">
                                #
                              </th>
                              <th class="text-center">
                              </th>
                              <th>
                                Product Name
                              </th>
                              <th>
                                Type
                              </th>
                              <th class="text-center">
                                Qty
                              </th>
                              <th class="text-right">
                                Price
                              </th>
                              <th class="text-right">
                                Amount
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td class="text-center">
                                1
                              </td>
                              <td class="text-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                Moleskine Agenda
                              </td>
                              <td>
                                Office
                              </td>
                              <td class="text-center">
                                25
                              </td>
                              <td class="text-right">
                                € 49
                              </td>
                              <td class="text-right">
                                € 1,225
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                2
                              </td>
                              <td class="text-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                Stabilo Pen
                              </td>
                              <td>
                                Office
                              </td>
                              <td class="text-center">
                                30
                              </td>
                              <td class="text-right">
                                € 10
                              </td>
                              <td class="text-right">
                                € 300
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                3
                              </td>
                              <td class="text-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                A4 Paper Pack
                              </td>
                              <td>
                                Office
                              </td>
                              <td class="text-center">
                                50
                              </td>
                              <td class="text-right">
                                € 10.99
                              </td>
                              <td class="text-right">
                                € 109
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                4
                              </td>
                              <td class="text-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox">
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                Apple iPad
                              </td>
                              <td>
                                Meeting
                              </td>
                              <td class="text-center">
                                10
                              </td>
                              <td class="text-right">
                                € 499.00
                              </td>
                              <td class="text-right">
                                € 4,990
                              </td>
                            </tr>
                            <tr>
                              <td class="text-center">
                                5
                              </td>
                              <td class="text-center">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" checked>
                                    <span class="form-check-sign"></span>
                                  </label>
                                </div>
                              </td>
                              <td>
                                Apple iPhone
                              </td>
                              <td>
                                Communication
                              </td>
                              <td class="text-center">
                                10
                              </td>
                              <td class="text-right">
                                € 599.00
                              </td>
                              <td class="text-right">
                                € 5,999
                              </td>
                            </tr>
                            <tr>
                              <td colspan="5"></td>
                              <td class="td-total">Total</td>
                              <td class="td-price">€ 35,999</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <h4>
                    <small>Shopping Cart Table</small>
                  </h4>
                </div>
                <div class="col-md-12">
                  <div class="card  card-plain">
                    <div class="card-header">
                      <h4 class="card-title"> Shopping Cart Table</h4>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table tablesorter  table-shopping" id="">
                          <thead class="">
                            <tr>
                              <th class="text-center">
                              </th>
                              <th>
                                Product
                              </th>
                              <th>
                                Color
                              </th>
                              <th>
                                Size
                              </th>
                              <th class="text-right">
                                Price
                              </th>
                              <th class="text-right">
                                Qty
                              </th>
                              <th class="text-right">
                                Amount
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="img-container">
                                  <img src="./assets/img/jacket.png" alt="...">
                                </div>
                              </td>
                              <td class="td-name">
                                <a href="#jacket">Suede Biker Jacket</a>
                                <br />
                                <small>by Saint Laurent</small>
                              </td>
                              <td>
                                Black
                              </td>
                              <td>
                                M
                              </td>
                              <td class="td-number">
                                <small>€</small>3,390
                              </td>
                              <td class="td-number">
                                1
                                <div class="btn-group">
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-delete"></i> </button>
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-add"></i> </button>
                                </div>
                              </td>
                              <td class="td-number">
                                <small>€</small>549
                              </td>
                              <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link btn-danger">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="img-container">
                                  <img src="./assets/img/t-shirt.png" alt="...">
                                </div>
                              </td>
                              <td class="td-name">
                                <a href="#pants">Jersey T-Shirt</a>
                                <br />
                                <small>by Balmain</small>
                              </td>
                              <td>
                                Black
                              </td>
                              <td>
                                M
                              </td>
                              <td class="td-number">
                                <small>€</small>499
                              </td>
                              <td class="td-number">
                                2
                                <div class="btn-group">
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-delete"></i> </button>
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-add"></i> </button>
                                </div>
                              </td>
                              <td class="td-number">
                                <small>€</small>998
                              </td>
                              <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link btn-danger">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="img-container">
                                  <img src="./assets/img/gucci.png" alt="...">
                                </div>
                              </td>
                              <td class="td-name">
                                <a href="#nothing">Slim-Fit Swim Short</a>
                                <br />
                                <small>by Prada</small>
                              </td>
                              <td>
                                Red
                              </td>
                              <td>
                                M
                              </td>
                              <td class="td-number">
                                <small>€</small>200
                              </td>
                              <td class="td-number">
                                1
                                <div class="btn-group">
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-delete"></i> </button>
                                  <button class="btn btn-info btn-sm"> <i class="tim-icons icon-simple-add"></i> </button>
                                </div>
                              </td>
                              <td class="td-number">
                                <small>€</small>799
                              </td>
                              <td class="td-actions">
                                <button type="button" rel="tooltip" data-placement="left" title="Remove item" class="btn btn-link btn-danger">
                                  <i class="tim-icons icon-simple-remove"></i>
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td colspan="3">
                              </td>
                              <td class="td-total">
                                Total
                              </td>
                              <td class="td-price">
                                <small>€</small>2,346
                              </td>
                              <td colspan="3" class="text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-round ">
                                  Complete Purchase
                                  <i class="tim-icons icon-minimal-right"></i>
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--                 end tables -->
            <div class="space-50"></div>
            <!--                 comments -->
            <div id="comments">
              <div class="title">
                <h3>
                  <small>Comments</small>
                </h3>
              </div>
              <div class="row">
                <div class="col-md-8 ml-auto mr-auto">
                  <div class="media-area">
                    <h3 class="title text-center">
                      <small>10 Comments</small>
                    </h3>
                    <div class="media">
                      <a class="pull-left" href="javascript:;">
                        <div class="avatar">
                          <img class="media-object img-raised" src="assets/img/marie.jpg" alt="..." />
                        </div>
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Tina Andrew
                          <small class="text-muted">&middot; 7 minutes ago</small>
                        </h5>
                        <p>Chance too good. God level bars. I'm so proud of @LifeOfDesiigner #1 song in the country. Panda! Don't be scared of the truth because we need to restart the human foundation in truth I stand with the most humility. We are so blessed!</p>
                        <p>All praises and blessings to the families of people who never gave up on dreams. Don't forget, You're Awesome!</p>
                        <div class="media-footer">
                          <a href="javascript:;" class="btn btn-primary btn-link pull-right" rel="tooltip" title="Reply to Comment">
                            <i class="tim-icons icon-send"></i> Reply
                          </a>
                          <a href="javascript:;" class="btn btn-danger btn-link pull-right">
                            <i class="tim-icons icon-heart-2"></i> 243
                          </a>
                        </div>
                        <div class="media media-post">
                          <a class="pull-left author" href="javascript:;">
                            <div class="avatar">
                              <img class="media-object img-raised" alt="64x64" src="assets/img/michael.jpg">
                            </div>
                          </a>
                          <div class="media-body">
                            <textarea class="form-control" placeholder="Write a nice reply or go home..." rows="4"></textarea>
                            <div class="media-footer">
                              <a href="javascript:;" class="btn btn-primary pull-right">
                                <i class="tim-icons icon-send"></i> Reply
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media">
                      <a class="pull-left" href="javascript:;">
                        <div class="avatar">
                          <img class="media-object img-raised" alt="Tim Picture" src="assets/img/olivia.jpg">
                        </div>
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">John Camber
                          <small class="text-muted">&middot; Yesterday</small>
                        </h5>
                        <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                        <p> Don't forget, You're Awesome!</p>
                        <div class="media-footer">
                          <a href="javascript:;" class="btn btn-primary btn-link pull-right" rel="tooltip" title="Reply to Comment">
                            <i class="tim-icons icon-send"></i> Reply
                          </a>
                          <a href="javascript:;" class="btn btn-default btn-link pull-right">
                            <i class="tim-icons icon-heart-2"></i> 25
                          </a>
                        </div>
                        <div class="media">
                          <a class="pull-left" href="javascript:;">
                            <div class="avatar">
                              <img class="media-object img-raised" alt="64x64" src="assets/img/emily.jpg">
                            </div>
                          </a>
                          <div class="media-body">
                            <h5 class="media-heading">Tina Andrew
                              <small class="text-muted">&middot; 2 Days Ago</small>
                            </h5>
                            <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                            <p> Don't forget, You're Awesome!</p>
                            <div class="media-footer">
                              <a href="javascript:;" class="btn btn-primary btn-link pull-right" rel="tooltip" title="Reply to Comment">
                                <i class="tim-icons icon-send"></i> Reply
                              </a>
                              <a href="javascript:;" class="btn btn-danger btn-link pull-right">
                                <i class="tim-icons icon-heart-2"></i> 243
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="media">
                      <a class="pull-left" href="javascript:;">
                        <div class="avatar">
                          <img class="media-object img-raised" alt="64x64" src="assets/img/james.jpg">
                        </div>
                      </a>
                      <div class="media-body">
                        <h5 class="media-heading">Rosa Thompson
                          <small class="text-muted">&middot; 2 Days Ago</small>
                        </h5>
                        <p>Hello guys, nice to have you on the platform! There will be a lot of great stuff coming soon. We will keep you posted for the latest news.</p>
                        <p> Don't forget, You're Awesome!</p>
                        <div class="media-footer">
                          <a href="javascript:;" class="btn btn-primary btn-link pull-right" rel="tooltip" title="Reply to Comment">
                            <i class="tim-icons icon-send"></i> Reply
                          </a>
                          <a href="javascript:;" class="btn btn-danger btn-link pull-right">
                            <i class="tim-icons icon-heart-2"></i> 243
                          </a>
                        </div>
                      </div>
                    </div>
                    <ul class="pagination pagination-primary justify-content-center">
                      <li class="page-item">
                        <a class="page-link" href="javascript:;" aria-label="Previous">
                          <span aria-hidden="true"><i class="fa fa-angle-double-left" aria-hidden="true"></i></span>
                        </a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:;">1</a>
                      </li>
                      <li class="page-item active">
                        <a class="page-link" href="javascript:;">2</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:;">3</a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="javascript:;" aria-label="Next">
                          <span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <h4 class="text-center">Post your comment
                    <br>
                    <small class="text-muted">- Logged In User -</small>
                  </h4>
                  <div class="media media-post">
                    <a class="pull-left author" href="javascript:;">
                      <div class="avatar">
                        <img class="media-object img-raised" alt="64x64" src="assets/img/james.jpg">
                      </div>
                    </a>
                    <div class="media-body">
                      <textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                      <div class="media-footer">
                        <a href="javascript:;" class="btn btn-primary btn-wd pull-right">Post Comment</a>
                      </div>
                    </div>
                  </div>
                  <!-- end media-post -->
                  <h4 class="text-center">Post your comment
                    <br>
                    <small class="text-muted">- Not Logged In User -</small>
                  </h4>
                  <div class="media media-post">
                    <a class="pull-left author" href="javascript:;">
                      <div class="avatar">
                        <img class="media-object img-raised" alt="64x64" src="assets/img/placeholder.jpg" />
                      </div>
                    </a>
                    <div class="media-body">
                      <form class="form">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Your Name" />
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="Your email" />
                            </div>
                          </div>
                        </div>
                        <textarea class="form-control" placeholder="Write some nice stuff or nothing..." rows="6"></textarea>
                        <div class="media-footer">
                          <h6 class="text-muted">Sign in with</h6>
                          <a href="" class="btn btn-icon btn-round btn-twitter">
                            <i class="fab fa-twitter"></i>
                          </a>
                          <a href="" class="btn btn-icon btn-round btn-facebook">
                            <i class="fab fa-facebook-square"></i>
                          </a>
                          <a href="" class="btn btn-icon btn-round btn-google">
                            <i class="fab fa-google-plus-square"></i>
                          </a>
                          <a href="javascript:;" class="btn btn-primary pull-right">Post Comment</a>
                        </div>
                      </form>
                    </div>
                    <!-- end media-body -->
                  </div>
                  <!-- end media-post -->
                </div>
              </div>
            </div>
            <!--                 end comments                 -->
          </div>
        </div>
      </div>
      <div id="cards" class="section section-cards">
        <!--     *********    BLOG CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="title">
              <h3 class="title">Cards</h3>
              <h3>
                <small>Blog Cards</small>
              </h3>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-4">
                <div class="card" data-background-color="red">
                  <div class="card-body">
                    <h6 class="category-social">
                      <i class="fa fa-fire"></i> Trending
                    </h6>
                    <p class="card-description">
                      "The supreme art of war is to subdue the enemy without fighting."
                    </p>
                    <div class="card-footer">
                      <div class="author">
                        <img src="assets/img/julie.jpg" alt="..." class="avatar img-raised">
                        <span>Susan B. Anthony</span>
                      </div>
                      <div class="stats stats-right">
                        <i class="tim-icons icon-heart-2"></i> 10.4K ·
                        <i class="tim-icons icon-single-copy-04"></i> 425
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-blog">
                  <div class="card-image">
                    <img class="img rounded" src="assets/img/steven-roe.jpg">
                  </div>
                  <div class="card-body">
                    <h6 class="category text-warning">
                      <i class="tim-icons icon-wallet-43"></i> Focus
                    </h6>
                    <h5 class="card-title">
                      <a href="javascript:;">Stay Focused: Train Your Brain</a>
                    </h5>
                    <p class="card-description">
                      Our brains are finely attuned to distraction, so today's digital environment makes it especially hard to focus...
                    </p>
                  </div>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h6 class="category text-danger">
                      <i class="tim-icons icon-sound-wave"></i> Trending
                    </h6>
                    <h5 class="card-title">
                      <a href="javascript:;">Here Be Dragons</a>
                    </h5>
                    <p class="card-description">
                      An immersive production studio focused on virtual reality content, has closed a $10 million Series A round led by Discovery Communications
                    </p>
                    <div class="card-footer">
                      <div class="author">
                        <img src="assets/img/olivia.jpg" alt="..." class="avatar img-raised">
                        <span>Lord Alex</span>
                      </div>
                      <div class="stats stats-right">
                        <i class="tim-icons icon-heart-2"></i> 342 ·
                        <i class="tim-icons icon-single-copy-04"></i> 45
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4">
                <div class="card bg-default">
                  <div class="card-body">
                    <h6 class="category-social">
                      <i class="tim-icons icon-app"></i> New Apps
                    </h6>
                    <h4 class="card-title">
                      <a href="javascript:;">FiftyThree Files For Paper</a>
                    </h4>
                    <p class="card-description">
                      Yesterday, as Facebook launched its news reader app Paper, design-focused startup FiftyThree called out Facebook publicly for using their brand name...
                    </p>
                    <div class="card-footer text-center">
                      <a href="javascript:;" class="btn btn-default btn-round">Read Article</a>
                    </div>
                  </div>
                </div>
                <div class="card card-blog">
                  <div class="card-image">
                    <a href="javascript:;">
                      <img class="img rounded" src="assets/img/denys.jpg">
                    </a>
                  </div>
                  <div class="card-body">
                    <h6 class="category text-primary">Features</h6>
                    <h5 class="card-title">
                      That’s One Way To Ditch Your Passenger
                    </h5>
                    <p class="card-description">
                      As near as we can tell, this guy must have thought he was going over backwards and tapped the rear break to bring the nose down...
                    </p>
                    <div class="card-footer">
                      <div class="author">
                        <img src="assets/img/ryan.jpg" alt="..." class="avatar img-raised">
                        <span>Mike John</span>
                      </div>
                      <div class="stats stats-right">
                        <i class="tim-icons icon-watch-time"></i> 5 min read
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card" data-background-color="blue">
                  <div class="card-body">
                    <h6 class="category-social">
                      <i class="fab fa-twitter"></i> Twitter
                    </h6>
                    <p>
                      "You Don't Have to Sacrifice Joy to Build a Fabulous Business and Life"
                    </p>
                    <div class="card-footer">
                      <div class="author">
                        <img src="assets/img/mike.jpg" alt="..." class="avatar img-raised">
                        <span>Tania Andrew</span>
                      </div>
                      <div class="stats stats-right">
                        <i class="tim-icons icon-heart-2"></i> 2.4K ·
                        <i class="tim-icons icon-single-copy-04"></i> 45
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-lg-4">
                <div class="card card-blog">
                  <div class="card-image">
                    <a href="javascript:;">
                      <img class="img rounded" src="assets/img/mark-harrison.jpg">
                    </a>
                  </div>
                  <div class="card-body text-center">
                    <h6 class="category text-danger">
                      <i class="tim-icons icon-sound-wave"></i> Business
                    </h6>
                    <h5 class="card-title">
                      Axel Springer Spends $343M To Buy Business Insider
                    </h5>
                    <p class="card-description">
                      German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
                    </p>
                    <div class="card-footer">
                      <a href="javascript:;" class="btn btn-primary">Read Article</a>
                    </div>
                  </div>
                </div>
                <div class="card card-blog">
                  <div class="card-image">
                    <img class="img rounded" src="assets/img/noah-wetering.jpg">
                  </div>
                  <div class="card-body">
                    <h6 class="category text-info">
                      <i class="tim-icons icon-camera-18"></i> Photo
                    </h6>
                    <h5 class="card-title">
                      <a href="javascript:;">Indispensible to nature photography: the hide</a>
                    </h5>
                    <div class="card-footer">
                      <div class="stats stats-right">
                        <i class="tim-icons icon-heart-2"></i> 342 ·
                        <i class="tim-icons icon-single-copy-04"></i> 45
                      </div>
                      <div class="author">
                        <img src="assets/img/her.png" alt="..." class="avatar img-raised">
                        <span>Denise Coldewey</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END BLOG CARDS      *********      -->
        <!--     *********    PROFILE CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="title">
              <h3>
                <small>Profile Cards</small>
              </h3>
            </div>
            <div class="row">
              <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-profile">
                  <div class="card-image">
                    <h4 class="title">Dylan Wyatt</h4>
                    <div class="dropdown">
                      <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="tim-icons icon-settings-gear-63"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                        <a class="dropdown-item" href="javascript:;">Edit Profile</a>
                        <a class="dropdown-item" href="javascript:;">Settings</a>
                        <a class="dropdown-item" href="javascript:;">Log out</a>
                      </div>
                    </div>
                    <a href="javascript:;">
                      <img class="img img-raised rounded" src="assets/img/p10.jpg" />
                    </a>
                  </div>
                  <div class="card-body">
                    <hr class="line-primary">
                    <h3 class="job-title">Team Lead</h3>
                    <div class="table-responsive">
                      <table class="table tablesorter " id="plain-table">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-atom"></i> Skills
                            </td>
                            <td class="text-right">
                              Leadership
                            </td>
                          </tr>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-user-run"></i> Hobbies
                            </td>
                            <td class="text-right">
                              Skiing, Chess
                            </td>
                          </tr>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-chart-bar-32"></i> Level
                            </td>
                            <td class="text-right">
                              • • • • •
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-profile profile-bg">
                  <div class="card-header" style="background-image: url('assets/img/sendra-martorell.jpg')">
                    <div class="card-avatar">
                      <a href="javascript:;">
                        <img class="img img-raised" src="assets/img/ryan.png" />
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Jon Collins</h3>
                    <h6 class="category text-primary">Data Specialist</h6>
                    <p class="card-description">
                      Scaling DevOps: Strategy & Technical Considerations for Successful Enterprise DevOps
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="follow float-left">
                      <a class="btn btn-primary btn-sm btn-simple" href="javascript:;">
                        <i class="tim-icons icon-check-2"></i> Following
                      </a>
                    </div>
                    <div class="d-inline float-right">
                      <a href="javascript:;" class="btn btn-icon btn-dribbble btn-round"><i class="fab fa-dribbble"></i></a>
                      <a href="javascript:;" class="btn btn-icon btn-linkedin btn-round"><i class="fab fa-linkedin"></i></a>
                      <a href="javascript:;" class="btn btn-icon btn-behance btn-round"><i class="fab fa-behance"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                <div class="card card-profile" data-background="full">
                  <a href="javascript:;">
                    <img class="img img-raised rounded" src="assets/img/kareya-saleh.jpg" />
                  </a>
                  <div class="card-image">
                    <h4 class="title">Jane Doe</h4>
                    <div class="dropdown">
                      <button type="button" class="btn btn-link dropdown-toggle btn-icon" data-toggle="dropdown" aria-expanded="false">
                        <i class="tim-icons icon-settings-gear-63"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end">
                        <a class="dropdown-item" href="javascript:;">Edit Profile</a>
                        <a class="dropdown-item" href="javascript:;">Settings</a>
                        <a class="dropdown-item" href="javascript:;">Log out</a>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <hr class="line-primary">
                    <h3 class="job-title">Scrum Master</h3>
                    <div class="table-responsive">
                      <table class="table tablesorter " id="plain-table">
                        <tbody>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-atom"></i> Skills
                            </td>
                            <td class="text-right">
                              Organization
                            </td>
                          </tr>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-user-run"></i> Hobbies
                            </td>
                            <td class="text-right">
                              Singing Jogging
                            </td>
                          </tr>
                          <tr>
                            <td class="text-left">
                              <i class="tim-icons icon-chart-bar-32"></i> Level
                            </td>
                            <td class="text-right">
                              • • • • •
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PROFILE CARDS      *********      -->
        <!--     *********   FULL Background CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="title">
              <h3>
                <small>Full Background Cards</small>
              </h3>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card card-blog card-background" data-animation="true">
                  <div class="full-background" style="background-image: url('./assets/img/marc-olivier-jodoin.jpg')"></div>
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category">Sales Leads</h6>
                      <a href="javascript:;">
                        <h3 class="card-title">Configure Blockchain Technology</h3>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="card card-blog card-background" data-animation="zooming">
                  <div class="full-background" style="background-image: url('./assets/img/matthew-henry.jpg')"></div>
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category">New Challenges</h6>
                      <a href="javascript:;">
                        <h3 class="card-title">Touch on a trend</h3>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="card card-blog card-background" data-animation="zooming">
                  <div class="full-background" style="background-image: url('./assets/img/waranont.jpg')"></div>
                  <div class="card-body">
                    <div class="content-bottom">
                      <h6 class="card-category">Driverless Future</h6>
                      <a href="javascript:;">
                        <h3 class="card-title">Self-Driving Cars</h3>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PRODUCT CARDS      *********      -->
        <!--     *********    PRICING CARDS     *********      -->
        <div class="cards">
          <div class="container">
            <div class="title">
              <h3>
                <small>Pricing Cards</small>
              </h3>
            </div>
            <div class="row pricing-2">
              <div class="col-md-6 col-lg-3">
                <div class="card card-pricing">
                  <div class="card-header card-background" style="background-image: url('./assets/img/waranont.jpg')">
                    <span class="badge badge-primary">Enterprise</span>
                    <h1 class="card-title">
                      <small>$</small>599</h1>
                    <h5>per year</h5>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li><i class="tim-icons icon-check-2"></i> 10.000 MB</li>
                      <li><i class="tim-icons icon-email-85"></i> Unlimited emails</li>
                      <li><i class="tim-icons icon-chart-bar-32"></i> 50 Databases</li>
                      <li><i class="tim-icons icon-alert-circle-exc"></i> Premium Support</li>
                    </ul>
                    <a href="#pablo" class="btn btn-primary mt-4">
                      Get started
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card card-pricing">
                  <div class="card-body">
                    <h6 class="category">Alpha Pack</h6>
                    <div class="icon icon-primary">
                      <i class="tim-icons icon-heart-2"></i>
                    </div>
                    <h3 class="card-title">$67</h3>
                    <p class="card-description">
                      This is good if your company size is between 100 and 299 employees.</p>
                    <a href="javascript:;" class="btn btn-neutral btn-round">Add to Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card card-pricing">
                  <div class="card-header bg-warning">
                    <span class="badge badge-default">pro</span>
                    <h1 class="card-title">
                      <small>$</small>68</h1>
                    <h5>per month</h5>
                  </div>
                  <div class="card-body">
                    <ul>
                      <li><i class="tim-icons icon-check-2"></i> 5 GB</li>
                      <li><i class="tim-icons icon-email-85"></i> 2k emails</li>
                      <li><i class="tim-icons icon-chart-bar-32"></i> 5 Databases</li>
                      <li><i class="tim-icons icon-alert-circle-exc"></i> Premium Support</li>
                    </ul>
                    <a href="#pablo" class="btn btn-warning mt-4">
                      Get started
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="card card-pricing card-plain card-primary">
                  <div class="card-body">
                    <h2 class="title">Free</h2>
                    <h5 class="description">$0.00
                      <small>/Monthly</small>
                      </h4>
                      <ul>
                        <li>1 GB of space</li>
                        <li>Limited Support</li>
                        <li>Support at $25/hour</li>
                        <li>Limited cloud access</li>
                      </ul>
                      <a href="javascript:;" class="btn btn-neutral btn-round">
                        Choose plan
                      </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="title">
              <h3>
                <small>Coin Cards</small>
              </h3>
            </div>
            <div class="row card-coins">
              <div class="col-md-4">
                <div class="card card-coin card-plain">
                  <div class="card-header">
                    <img src="./assets/img/bitcoin.png" class="img-center img-fluid">
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <h4 class="text-uppercase">Light Coin</h4>
                        <span>Plan</span>
                        <hr class="line-primary">
                      </div>
                    </div>
                    <div class="row">
                      <ul class="list-group">
                        <li class="list-group-item">50 messages</li>
                        <li class="list-group-item">100 emails</li>
                        <li class="list-group-item">24/7 Support</li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button class="btn btn-primary btn-simple">Get plan</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-coin card-plain">
                  <div class="card-header">
                    <img src="./assets/img/etherum.png" class="img-center img-fluid">
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <h4 class="text-uppercase">Dark Coin</h4>
                        <span>Plan</span>
                        <hr class="line-success">
                      </div>
                    </div>
                    <div class="row">
                      <ul class="list-group">
                        <li class="list-group-item">150 messages</li>
                        <li class="list-group-item">1000 emails</li>
                        <li class="list-group-item">24/7 Support</li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button class="btn btn-success btn-simple">Get plan</button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card card-coin card-plain">
                  <div class="card-header">
                    <img src="./assets/img/ripp.png" class="img-center img-fluid">
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-12 text-center">
                        <h4 class="text-uppercase">Bright Coin</h4>
                        <span>Plan</span>
                        <hr class="line-info">
                      </div>
                    </div>
                    <div class="row">
                      <ul class="list-group">
                        <li class="list-group-item">350 messages</li>
                        <li class="list-group-item">10K emails</li>
                        <li class="list-group-item">24/7 Support</li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-footer text-center">
                    <button class="btn btn-info btn-simple">Get plan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PRICING CARDS      *********      -->
      </div>
      <div class="section section-plain-cards">
        <div class="container">
          <div class="title">
            <h3>Plain Cards</h3>
            <h3>
              <small>Blog Cards</small>
            </h3>
          </div>
          <!--     *********    PLAIN BLOG CARDS      *********      -->
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="card card-blog card-plain">
                <div class="card-image">
                  <img class="img rounded img-raised" src="assets/img/pawel-nolbert.jpg">
                </div>
                <div class="card-body">
                  <h6 class="category text-warning">
                    <i class="tim-icons icon-wallet-43"></i> Focus
                  </h6>
                  <h5 class="card-title">
                    <a href="javascript:;">Stay Focused: Train Your Brain</a>
                  </h5>
                  <p class="card-description">
                    Our brains are finely attuned to distraction, so today's digital environment makes it especially hard to focus...
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card card-blog card-plain">
                <div class="card-image">
                  <a href="javascript:;">
                    <img class="img rounded img-raised" src="assets/img/max.jpg">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="category text-primary">Features</h6>
                  <h5 class="card-title">
                    <a href="javascript:;">That’s One Way To Ditch Your Passenger</a>
                  </h5>
                  <p class="card-description">
                    As near as we can tell, this guy must have thought he was going over backwards and tapped the rear break to bring the nose down...
                  </p>
                  <div class="card-footer">
                    <div class="author">
                      <img src="assets/img/lora.jpg" alt="..." class="avatar img-raised">
                      <span>Mike John</span>
                    </div>
                    <div class="stats stats-right">
                      <i class="tim-icons icon-watch-time"></i> 5 min read
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="card card-blog card-plain">
                <div class="card-image">
                  <a href="javascript:;">
                    <img class="img img-raised rounded" src="assets/img/serge-kutuzov.jpg">
                  </a>
                </div>
                <div class="card-body text-center">
                  <h6 class="category text-danger">
                    <i class="tim-icons icon-sound-wave"></i> Business
                  </h6>
                  <h5 class="card-title">
                    <a href="javascript:;">Axel Springer Spends $343M To Buy Business Insider</a>
                  </h5>
                  <p class="card-description">
                    German media giant Axel Springer has announced it’s acquiring online business news publication Business Inside...
                  </p>
                  <div class="card-footer">
                    <a href="javascript:;" class="btn btn-primary">Read Article</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PLAIN BLOG CARDS      *********      -->
        <!--     *********   PLAIN PROFILE CARDS     *********      -->
        <div class="container">
          <div class="title">
            <h3>
              <small>Profile Cards</small>
            </h3>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <div class="card card-profile card-plain">
                <div class="card-image">
                  <img class="img rounded" src="assets/img/p10.jpg">
                </div>
                <div class="card-body">
                  <a href="pablo">
                    <h4 class="card-title">Jackson Andrew</h4>
                  </a>
                  <h6 class="card-category text-info">
                    Web Designer
                  </h6>
                  <div class="card-footer">
                    <a href="javascript:;" class="btn btn-simple btn-sm btn-twitter"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:;" class="btn btn-simple btn-sm btn-dribbble"><i class="fab fa-dribbble"></i></a>
                    <a href="javascript:;" class="btn btn-simple btn-sm btn-instagram"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img img-raised" src="assets/img/mike.jpg">
                  </a>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Alexa Mike</h4>
                  <h6 class="category text-gray">
                    Designer
                  </h6>
                  <p class="card-description">
                    One of the co-founders. Alec drives the technical strategy of the platform, customer support and brand.
                  </p>
                  <div class="card-footer">
                    <a href="javascript:;" class="btn btn-icon btn-twitter btn-round"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:;" class="btn btn-icon btn-facebook btn-round"><i class="fab fa-facebook-square"></i></a>
                    <a href="javascript:;" class="btn btn-icon btn-google btn-round"><i class="fab fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-profile card-plain">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img img-raised" src="assets/img/james.jpg">
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category">CEO / Co-Founder</h6>
                  <h4 class="card-title">James Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth.
                  </p>
                  <a href="javascript:;" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="card card-profile card-plain">
                <div class="card-body">
                  <div class="card-avatar">
                    <a href="javascript:;">
                      <img class="img img-raised" src="assets/img/mike.jpeg">
                    </a>
                  </div>
                  <h6 class="category text-gray">Growth Hacker</h6>
                  <h4 class="card-title">Oliviu Thompson</h4>
                  <p class="card-description">
                    "Work hard play harder."
                  </p>
                  <div class="card-footer">
                    <a href="javascript:;" class="btn btn-icon btn-primary btn-simple btn-round"><i class="fab fa-twitter"></i></a>
                    <a href="javascript:;" class="btn btn-icon  btn-primary btn-simple btn-round"><i class="fab fa-facebook-square"></i></a>
                    <a href="javascript:;" class="btn btn-icon  btn-primary btn-simple btn-round"><i class="fab fa-google"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--     *********    END PROFILE CARDS      *********      -->
      </div>
      <div class="section section-javascript" id="javascriptComponents">
        <img src="assets/img/path5.png" class="path">
        <img src="assets/img/path5.png" class="path path1">
        <div class="container">
          <h3 class="title mb-5">Javascript components</h3>
          <h4 class="mb-5">Modal</h4>
          <div class="row" id="modals">
            <div class="col-md-12">
              <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#myModal">
                <i class="tim-icons icon-single-copy-04"></i> Classic
              </button>
              <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#myModal1">
                <i class="tim-icons icon-button-power"></i> Launch Modal Mini
              </button>
              <button class="btn btn-primary mr-3" data-toggle="modal" data-target="#noticeModal">
                <i class="tim-icons icon-trophy"></i> Notice
              </button>
              <button class="btn btn-primary" data-toggle="modal" data-target="#loginModal">
                <i class="tim-icons icon-single-02"></i> Login Modal
              </button>
            </div>
          </div>
          <br />
          <br />
          <div class="row">
            <div class="col-md-6">
              <h4>Datetimepicker</h4>
              <div class="row">
                <div class="col-md-6">
                  <div class="datepicker-container">
                    <div class="form-group">
                      <input type="text" class="form-control datetimepicker" value="10/05/2016">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control timepicker" value="10/05/2016">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control datepicker" value="10/05/2016">
                    </div>
                  </div>
                </div>
              </div>
              <!--                 collapse -->
              <div id="collapse">
                <div class="title">
                  <h4>Collapse</h4>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
                      <div class="card card-plain">
                        <div class="card-header" role="tab" id="headingOne">
                          <a class="d-flex" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                            <i class="tim-icons icon-minimal-down ml-auto"></i>
                          </a>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card card-plain">
                        <div class="card-header" role="tab" id="headingTwo">
                          <a class="collapsed d-flex" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                            <i class="tim-icons icon-minimal-down ml-auto"></i>
                          </a>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <div class="card card-plain">
                        <div class="card-header" role="tab" id="headingThree">
                          <a class="collapsed d-flex" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            <i class="tim-icons icon-minimal-down ml-auto"></i>
                          </a>
                        </div>
                        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--                 end collapse -->
            </div>
          </div>
          <div class="space-50"></div>
          <div class="row">
            <div class="col-md-6">
              <h4 class="mb-5 mt-3">Popovers</h4>
              <button type="button" class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Top" data-toggle="popover" data-placement="top" data-content="Here will be some very useful information about his popover.">
                On top
              </button>
              <button type="button" class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Right" data-toggle="popover" data-placement="right" data-content="Here will be some very useful information about his popover.<br> Here will be some very useful information about his popover.">
                On right
              </button>
              <button type="button" class="btn btn-default btn-sm" data-container="body" data-original-title="Popover on Bottom" data-toggle="popover" data-placement="bottom" data-content="Here will be some very useful information about his popover.">
                On bottom
              </button>
              <button type="button" class="btn btn-default btn-sm" data-container="body" data-original-title="Popover On Left" data-toggle="popover" data-placement="left" data-content="Here will be some very useful information about his popover." data-color="primary">
                On left
              </button>
            </div>
            <div class="col-md-6">
              <h4 class="mb-5 mt-3">Tooltips</h4>
              <button type="button" class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="left" title="Tooltip on left" data-container="body" data-animation="true" data-delay="100">On left</button>
              <button type="button" class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="top" title="Tooltip on top" data-container="body" data-animation="true">On top</button>
              <button type="button" class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom" data-container="body" data-animation="true">On bottom</button>
              <button type="button" class="btn btn-default btn-tooltip btn-sm" data-toggle="tooltip" data-placement="right" title="Tooltip on right" data-container="body" data-animation="true">On right</button>
              <div class="clearfix"></div>
              <br>
              <br>
            </div>
          </div>
        </div>
        <div id="file-uploader">
          <div class="container">
            <div class="title">
              <h4>File Uploader</h4>
            </div>
            <div class="row">
              <div class="col-md-5 col-sm-8">
                <h4 class="card-title">Regular Image</h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail">
                    <img src="./assets/img/image_placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                  <div>
                    <span class="btn btn-rose btn-round btn-file">
                      <span class="fileinput-new">Select image</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="..." />
                    </span>
                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-4">
                <h4>
                  <small>Avatar</small>
                </h4>
                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                  <div class="fileinput-new thumbnail img-circle img-raised">
                    <img src="assets/img/placeholder.jpg" alt="...">
                  </div>
                  <div class="fileinput-preview fileinput-exists thumbnail img-circle img-raised"></div>
                  <div>
                    <span class="btn btn-raised btn-round btn-default btn-file">
                      <span class="fileinput-new">Add Photo</span>
                      <span class="fileinput-exists">Change</span>
                      <input type="file" name="...">
                    </span>
                    <br>
                    <a href="javascript:;" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="tim-icons icon-simple-remove"></i> Remove</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section">
          <div class="container">
            <div class="title">
              <h3>Carousel</h3>
            </div>
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-5 mb-5 mb-lg-0 ">
                <h1 class="text-white font-weight-light">Bootstrap carousel</h1>
                <p class="text-white mt-4">BLK• Design comes with three pre-built pages to help you get started faster. You can change the text and images and you're good to go.</p>
                <a href="./docs/1.0/components/alerts.html" class="btn btn-warning mt-4">See all components</a>
              </div>
              <div class="col-lg-6">
                <div id="carouselExampleControls" class="carousel slide">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="assets/img/denys.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/img/fabien-bazanegue.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="assets/img/mark-finn.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section section-nucleo-icons">
        <img src="assets/img/path3.png" class="path">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12">
              <h2 class="title">Nucleo Icons</h2>
              <h4 class="description">
                BLK• Design System PRO comes with 100 custom icons made by our friends from NucleoApp. The official package contains over 2.100 thin icons which are looking great in combination with BLK• Design System PRO Make sure you check all of them and use those that you like the most.
              </h4>
              <div class="btn-wrapper">
                <a href="./docs/1.0/foundation/icons.html" class="btn btn-primary btn-round" target="_blank">View Demo Icons</a>
                <a href="https://nucleoapp.com/?ref=1712" class="btn btn-primary btn-simple btn-round btn-lg" target="_blank">View All Icons</a>
              </div>
            </div>
          </div>
          <div class="blur-hover">
            <a href="./docs/1.0/foundation/icons.html">
              <div class="icons-container blur-item on-screen mt-5">
                <!-- Center -->
                <i class="icon tim-icons icon-coins"></i>
                <!-- Right 1 -->
                <i class="icon icon-sm tim-icons icon-spaceship"></i>
                <i class="icon icon-sm tim-icons icon-money-coins"></i>
                <i class="icon icon-sm tim-icons icon-link-72"></i>
                <!-- Right 2 -->
                <i class="icon tim-icons icon-send"></i>
                <i class="icon tim-icons icon-mobile"></i>
                <i class="icon tim-icons icon-wifi"></i>
                <!-- Left 1 -->
                <i class="icon icon-sm tim-icons icon-key-25"></i>
                <i class="icon icon-sm tim-icons icon-atom"></i>
                <i class="icon icon-sm tim-icons icon-satisfied"></i>
                <!-- Left 2 -->
                <i class="icon tim-icons icon-gift-2"></i>
                <i class="icon tim-icons icon-tap-02"></i>
                <i class="icon tim-icons icon-wallet-43"></i>
              </div>
              <span class="blur-hidden h5 text-primary">Explore all the 21.000+ Nucleo Icons</span>
            </a>
          </div>
        </div>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <h4 class="title title-up">Modal title</h4>
            </div>
            <div class="modal-body">
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
              </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default">Nice Button</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
      <!-- Mini Modal -->
      <div class="modal fade modal-mini modal-primary modal-mini" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="modal-profile">
                <i class="tim-icons icon-single-02"></i>
              </div>
            </div>
            <div class="modal-body">
              <p>Always have an access to your profile</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-link btn-neutral">Back</button>
              <button type="button" class="btn btn-link btn-neutral" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Form Modal -->
      <div class="modal fade modal-black" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove text-white"></i>
              </button>
              <div class="text-muted text-center ml-auto mr-auto">
                <h3 class="mb-0">Sign in with</h3>
              </div>
            </div>
            <div class="modal-body">
              <div class="btn-wrapper text-center">
                <a href="javascript:;" class="btn btn-neutral btn-icon">
                  <img src="assets/img/github.svg">
                </a>
                <a href="javascript:;" class="btn btn-neutral btn-icon">
                  <img src="assets/img/google.svg">
                </a>
              </div>
              <div class="text-center text-muted mb-4 mt-3">
                <small>Or sign in with credentials</small>
              </div>
              <form role="form">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-email-85"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="tim-icons icon-key-25"></i>
                      </span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password">
                  </div>
                </div>
                <div class="form-check mt-3">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox" checked>
                    <span class="form-check-sign"></span>
                    Remember me!
                  </label>
                </div>
                <div class="text-center">
                  <button type="button" class="btn btn-primary my-4">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
      <!-- notice modal -->
      <div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notice">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
              <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
            </div>
            <div class="modal-body">
              <div class="instruction">
                <div class="row">
                  <div class="col-md-8">
                    <strong>1. Register</strong>
                    <p class="description">The first step is to create an account at
                      <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                  </div>
                  <div class="col-md-4">
                    <div class="picture">
                      <img src="assets/img/pricing1.jpg" alt="Thumbnail Image" class="rounded img-raised">
                    </div>
                  </div>
                </div>
              </div>
              <div class="instruction">
                <div class="row">
                  <div class="col-md-8">
                    <strong>2. Apply</strong>
                    <p class="description">The first step is to create an account at
                      <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                  </div>
                  <div class="col-md-4">
                    <div class="picture">
                      <img src="assets/img/project9.jpg" alt="Thumbnail Image" class="rounded img-raised">
                    </div>
                  </div>
                </div>
              </div>
              <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
            </div>
            <div class="modal-footer justify-content-center">
              <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
            </div>
          </div>
        </div>
      </div>
      <!-- end notice modal -->
      <!-- Login Modal -->
      <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login">
          <div class="modal-content">
            <div class="card card-login">
              <form class="form" method="" action="">
                <div class="card-header">
                  <img class="card-img" src="./assets/img/square-purple-1.png" alt="Card image">
                  <h4 class="card-title">Login</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="tim-icons icon-simple-remove"></i>
                  </button>
                </div>
                <div class="card-body">
                  <div class="input-group input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="tim-icons icon-single-02"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="First Name...">
                  </div>
                  <div class="input-group input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="tim-icons icon-caps-small"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Last Name...">
                  </div>
                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Get Started</a>
                </div>
                <div class="pull-left ml-3 mb-3">
                  <h6>
                    <a href="#pablo" class="link footer-link">Create Account</a>
                  </h6>
                </div>
                <div class="pull-right mr-3 mb-3">
                  <h6>
                    <a href="#pablo" class="link footer-link">Need Help?</a>
                  </h6>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--  End Modal -->
    </div>
    
  </div>
@endsection
