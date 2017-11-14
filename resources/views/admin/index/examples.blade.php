@extends('admin.layouts.app')

@section('main')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Messages</span>
                    <span class="info-box-number">1,410</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">410</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Uploads</span>
                    <span class="info-box-number">13,648</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">93,139</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-aqua">
                <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Bookmarks</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-green">
                <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Likes</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-yellow">
                <span class="info-box-icon"><i class="fa fa-calendar"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Events</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box bg-red">
                <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Comments</span>
                    <span class="info-box-number">41,410</span>
                    <div class="progress">
                        <div class="progress-bar" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>
                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3>53<sup style="font-size: 20px">%</sup></h3>
                    <p>Bounce Rate</p>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>
                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>
                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="fa fa-envelope-open"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-default collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">Expandable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Removable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Collapsable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Loading state</h3>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-default collapsed-box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Expandable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Removable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-warning box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Collapsable</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-danger box-solid">
                <div class="box-header">
                    <h3 class="box-title">Loading state</h3>
                </div>
                <div class="box-body">
                    The body of the box
                </div>
                <div class="overlay">
                    <i class="fa fa-refresh fa-spin"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary direct-chat direct-chat-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>
                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="" class="badge bg-light-blue"
                              data-original-title="3 New Messages">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                data-widget="chat-pane-toggle" data-original-title="Contacts">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">

                                    <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-primary btn-flat">Send</button>
                      </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-success direct-chat direct-chat-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>
                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="" class="badge bg-green"
                              data-original-title="3 New Messages">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                data-widget="chat-pane-toggle" data-original-title="Contacts">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">

                                    <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-success btn-flat">Send</button>
                      </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-warning direct-chat direct-chat-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>
                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="" class="badge bg-yellow"
                              data-original-title="3 New Messages">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                data-widget="chat-pane-toggle" data-original-title="Contacts">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">

                                    <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-warning btn-flat">Send</button>
                      </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="box box-danger direct-chat direct-chat-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Direct Chat</h3>
                    <div class="box-tools pull-right">
                        <span data-toggle="tooltip" title="" class="badge bg-red"
                              data-original-title="3 New Messages">3</span>
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title=""
                                data-widget="chat-pane-toggle" data-original-title="Contacts">
                            <i class="fa fa-comments"></i></button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="direct-chat-messages">
                        <div class="direct-chat-msg">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                Is this template really for free? That's unbelievable!
                            </div>
                        </div>
                        <div class="direct-chat-msg right">
                            <div class="direct-chat-info clearfix">
                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
                            </div>
                            <img class="direct-chat-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">
                            <!-- /.direct-chat-img -->
                            <div class="direct-chat-text">
                                You better believe it!
                            </div>
                        </div>
                    </div>
                    <div class="direct-chat-contacts">
                        <ul class="contacts-list">
                            <li>
                                <a href="#">
                                    <img class="contacts-list-img" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg">

                                    <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              Count Dracula
                              <small class="contacts-list-date pull-right">2/28/2015</small>
                            </span>
                                        <span class="contacts-list-msg">How have you been? I was...</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                            <span class="input-group-btn">
                        <button type="submit" class="btn btn-danger btn-flat">Send</button>
                      </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <h2 class="page-header">Social Widgets</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="box box-widget widget-user-2">
                <div class="widget-user-header bg-yellow">
                    <div class="widget-user-image">
                        <img class="img-circle" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg" alt="User Avatar">
                    </div>
                    <h3 class="widget-user-username">Nadia Carmichael</h3>
                    <h5 class="widget-user-desc">Lead Developer</h5>
                </div>
                <div class="box-footer no-padding">
                    <ul class="nav nav-stacked">
                        <li><a href="#">Projects <span class="pull-right badge bg-blue">31</span></a></li>
                        <li><a href="#">Tasks <span class="pull-right badge bg-aqua">5</span></a></li>
                        <li><a href="#">Completed Projects <span class="pull-right badge bg-green">12</span></a></li>
                        <li><a href="#">Followers <span class="pull-right badge bg-red">842</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-aqua-active">
                    <h3 class="widget-user-username">Alexander Pierce</h3>
                    <h5 class="widget-user-desc">Founder &amp; CEO</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">SALES</span>
                            </div>
                        </div>
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">13,000</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">35</h5>
                                <span class="description-text">PRODUCTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="box box-widget widget-user">
                <div class="widget-user-header bg-black">
                    <h3 class="widget-user-username">Elizabeth Pierce</h3>
                    <h5 class="widget-user-desc">Web Designer</h5>
                </div>
                <div class="widget-user-image">
                    <img class="img-circle" src="http://owst2hgsv.bkt.clouddn.com/boy.jpg" alt="User Avatar">
                </div>
                <div class="box-footer">
                    <div class="row">
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">3,200</h5>
                                <span class="description-text">SALES</span>
                            </div>
                        </div>
                        <div class="col-sm-4 border-right">
                            <div class="description-block">
                                <h5 class="description-header">13,000</h5>
                                <span class="description-text">FOLLOWERS</span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="description-block">
                                <h5 class="description-header">35</h5>
                                <span class="description-text">PRODUCTS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box-default color-palette-box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-tag"></i> Color Palette</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Primary</h4>

                    <div class="color-palette-set">
                        <div class="bg-light-blue disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-light-blue color-palette"><span>#3c8dbc</span></div>
                        <div class="bg-light-blue-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Info</h4>

                    <div class="color-palette-set">
                        <div class="bg-aqua disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-aqua color-palette"><span>#00c0ef</span></div>
                        <div class="bg-aqua-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Success</h4>

                    <div class="color-palette-set">
                        <div class="bg-green disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-green color-palette"><span>#00a65a</span></div>
                        <div class="bg-green-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Warning</h4>

                    <div class="color-palette-set">
                        <div class="bg-yellow disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-yellow color-palette"><span>#f39c12</span></div>
                        <div class="bg-yellow-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Danger</h4>

                    <div class="color-palette-set">
                        <div class="bg-red disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-red color-palette"><span>#f56954</span></div>
                        <div class="bg-red-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Gray</h4>

                    <div class="color-palette-set">
                        <div class="bg-gray disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-gray color-palette"><span>#d2d6de</span></div>
                        <div class="bg-gray-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Navy</h4>

                    <div class="color-palette-set">
                        <div class="bg-navy disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-navy color-palette"><span>#001F3F</span></div>
                        <div class="bg-navy-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Teal</h4>

                    <div class="color-palette-set">
                        <div class="bg-teal disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-teal color-palette"><span>#39CCCC</span></div>
                        <div class="bg-teal-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Purple</h4>

                    <div class="color-palette-set">
                        <div class="bg-purple disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-purple color-palette"><span>#605ca8</span></div>
                        <div class="bg-purple-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Orange</h4>

                    <div class="color-palette-set">
                        <div class="bg-orange disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-orange color-palette"><span>#ff851b</span></div>
                        <div class="bg-orange-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Maroon</h4>

                    <div class="color-palette-set">
                        <div class="bg-maroon disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-maroon color-palette"><span>#D81B60</span></div>
                        <div class="bg-maroon-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 col-md-2">
                    <h4 class="text-center">Black</h4>

                    <div class="color-palette-set">
                        <div class="bg-black disabled color-palette"><span>Disabled</span></div>
                        <div class="bg-black color-palette"><span>#111111</span></div>
                        <div class="bg-black-active color-palette"><span>Active</span></div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.box-body -->
    </div>
    <h2 class="page-header">Alerts and Callouts</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-warning"></i>

                    <h3 class="box-title">Alerts</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                        entire
                        soul, like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                    <div class="alert alert-info alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-info"></i> Alert!</h4>
                        Info alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        Warning alert preview. This alert is dismissable.
                    </div>
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i> Alert!</h4>
                        Success alert preview. This alert is dismissable.
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>

                    <h3 class="box-title">Callouts</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="callout callout-danger">
                        <h4>I am a danger callout!</h4>

                        <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my
                            entire soul,
                            like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    </div>
                    <div class="callout callout-info">
                        <h4>I am an info callout!</h4>

                        <p>Follow the steps to continue to payment.</p>
                    </div>
                    <div class="callout callout-warning">
                        <h4>I am a warning callout!</h4>

                        <p>This is a yellow callout.</p>
                    </div>
                    <div class="callout callout-success">
                        <h4>I am a success callout!</h4>

                        <p>This is a green callout.</p>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <h2 class="page-header">AdminLTE Custom Tabs</h2>
    <div class="row">
        <div class="col-md-6">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
                    <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <b>How to use:</b>

                        <p>Exactly like the original bootstrap tabs except you should use
                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                        A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                        I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy,
                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                        that I neglect my talents. I should be incapable of drawing a single stroke
                        at the present moment; and yet I feel that I never was a greater artist than now.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->

        <div class="col-md-6">
            <!-- Custom Tabs (Pulled to the right) -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right">
                    <li class="active"><a href="#tab_1-1" data-toggle="tab">Tab 1</a></li>
                    <li><a href="#tab_2-2" data-toggle="tab">Tab 2</a></li>
                    <li><a href="#tab_3-2" data-toggle="tab">Tab 3</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            Dropdown <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a>
                            </li>
                            <li role="presentation" class="divider"></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li class="pull-left header"><i class="fa fa-th"></i> Custom Tabs</li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1-1">
                        <b>How to use:</b>

                        <p>Exactly like the original bootstrap tabs except you should use
                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                        A wonderful serenity has taken possession of my entire soul,
                        like these sweet mornings of spring which I enjoy with my whole heart.
                        I am alone, and feel the charm of existence in this spot,
                        which was created for the bliss of souls like mine. I am so happy,
                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                        that I neglect my talents. I should be incapable of drawing a single stroke
                        at the present moment; and yet I feel that I never was a greater artist than now.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2-2">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3-2">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
    </div>
    <h2 class="page-header">Progress Bars</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Progress Bars Different Sizes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p><code>.progress</code></p>

                    <div class="progress">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <p>Class: <code>.sm</code></p>

                    <div class="progress progress-sm active">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <p>Class: <code>.xs</code></p>

                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <p>Class: <code>.xxs</code></p>

                    <div class="progress progress-xxs">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Progress bars</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="progress">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                            <span class="sr-only">40% Complete (success)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                            <span class="sr-only">20% Complete</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                            <span class="sr-only">60% Complete (warning)</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                            <span class="sr-only">80% Complete</span>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col (right) -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Vertical Progress Bars Different Sizes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body text-center">
                    <p>By adding the class <code>.vertical</code> and <code>.progress-sm</code>,
                        <code>.progress-xs</code> or
                        <code>.progress-xxs</code> we achieve:</p>

                    <div class="progress vertical active">
                        <div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar"
                             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                            <span class="sr-only">40%</span>
                        </div>
                    </div>
                    <div class="progress vertical progress-sm">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="height: 100%">
                            <span class="sr-only">100%</span>
                        </div>
                    </div>
                    <div class="progress vertical progress-xs">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                            <span class="sr-only">60%</span>
                        </div>
                    </div>
                    <div class="progress vertical progress-xxs">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                             aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                            <span class="sr-only">60%</span>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Vertical Progress bars</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body text-center">
                    <p>By adding the class <code>.vertical</code> we achieve:</p>

                    <div class="progress vertical">
                        <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="40"
                             aria-valuemin="0" aria-valuemax="100" style="height: 40%">
                            <span class="sr-only">40%</span>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar progress-bar-aqua" role="progressbar" aria-valuenow="20"
                             aria-valuemin="0" aria-valuemax="100" style="height: 20%">
                            <span class="sr-only">20%</span>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="60"
                             aria-valuemin="0" aria-valuemax="100" style="height: 60%">
                            <span class="sr-only">60%</span>
                        </div>
                    </div>
                    <div class="progress vertical">
                        <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="80"
                             aria-valuemin="0" aria-valuemax="100" style="height: 80%">
                            <span class="sr-only">80%</span>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col (right) -->
    </div>
    <h2 class="page-header">Bootstrap Accordion &amp; Carousel</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Collapsible Accordion</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box-group" id="accordion">
                        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                        <div class="panel box box-primary">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                        Collapsible Group Item #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel box box-danger">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                        Collapsible Group Danger
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel box box-success">
                            <div class="box-header with-border">
                                <h4 class="box-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                        Collapsible Group Success
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="box-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                    richardson ad squid. 3
                                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                                    nesciunt laborum
                                    eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                                    coffee nulla
                                    assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes
                                    anderson cred
                                    nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                    occaecat craft beer
                                    farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them
                                    accusamus
                                    labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Carousel</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=I+Love+Bootstrap"
                                     alt="First slide">

                                <div class="carousel-caption">
                                    First Slide
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/900x500/3c8dbc/ffffff&amp;text=I+Love+Bootstrap"
                                     alt="Second slide">

                                <div class="carousel-caption">
                                    Second Slide
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://placehold.it/900x500/f39c12/ffffff&amp;text=I+Love+Bootstrap"
                                     alt="Third slide">

                                <div class="carousel-caption">
                                    Third Slide
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <h2 class="page-header">Typography</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Headlines</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <h1>h1. Bootstrap heading</h1>

                    <h2>h2. Bootstrap heading</h2>

                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Text Emphasis</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <p class="lead">Lead to emphasize importance</p>

                    <p class="text-green">Text green to emphasize success</p>

                    <p class="text-aqua">Text aqua to emphasize info</p>

                    <p class="text-light-blue">Text light blue to emphasize info (2)</p>

                    <p class="text-red">Text red to emphasize danger</p>

                    <p class="text-yellow">Text yellow to emphasize warning</p>

                    <p class="text-muted">Text muted to emphasize general</p>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Block Quotes</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Block Quotes Pulled Right</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body clearfix">
                    <blockquote class="pull-right">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Unordered List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Ordered Lists</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ol>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ol>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ol>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ol>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-4">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Unstyled List</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                        <li>Facilisis in pretium nisl aliquet</li>
                        <li>Nulla volutpat aliquam velit
                            <ul>
                                <li>Phasellus iaculis neque</li>
                                <li>Purus sodales ultricies</li>
                                <li>Vestibulum laoreet porttitor sem</li>
                                <li>Ac tristique libero volutpat at</li>
                            </ul>
                        </li>
                        <li>Faucibus porta lacus fringilla vel</li>
                        <li>Aenean sit amet erat nunc</li>
                        <li>Eget porttitor lorem</li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Description</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl>
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
        <div class="col-md-6">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-text-width"></i>

                    <h3 class="box-title">Description Horizontal</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Description lists</dt>
                        <dd>A description list is perfect for defining terms.</dd>
                        <dt>Euismod</dt>
                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                        <dt>Malesuada porta</dt>
                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                        <dt>Felis euismod semper eget lacinia</dt>
                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo
                            sit amet risus.
                        </dd>
                    </dl>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- ./col -->
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-edit"></i>

                    <h3 class="box-title">Buttons</h3>
                </div>
                <div class="box-body pad table-responsive">
                    <p>Various types of buttons. Using the base class <code>.btn</code></p>
                    <table class="table table-bordered text-center">
                        <tbody>
                        <tr>
                            <th>Normal</th>
                            <th>Large <code>.btn-lg</code></th>
                            <th>Small <code>.btn-sm</code></th>
                            <th>X-Small <code>.btn-xs</code></th>
                            <th>Flat <code>.btn-flat</code></th>
                            <th>Disabled <code>.disabled</code></th>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-default">Default</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-lg">Default</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-sm">Default</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-xs">Default</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default btn-flat">Default</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-default disabled">Default</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-primary">Primary</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-lg">Primary</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-sm">Primary</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-xs">Primary</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary btn-flat">Primary</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-primary disabled">Primary</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-success">Success</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-lg">Success</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-sm">Success</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-xs">Success</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-success btn-flat">Success</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-success disabled">Success</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-info">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-info btn-lg">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-info btn-sm">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-info btn-xs">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-info btn-flat">Info</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-info disabled">Info</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-danger">Danger</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-lg">Danger</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-sm">Danger</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-xs">Danger</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger btn-flat">Danger</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-danger disabled">Danger</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button type="button" class="btn btn-block btn-warning">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-lg">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-sm">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-xs">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning btn-flat">Warning</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-block btn-warning disabled">Warning</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- Block buttons -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Block Buttons</h3>
                </div>
                <div class="box-body">
                    <button type="button" class="btn btn-default btn-block">.btn-block</button>
                    <button type="button" class="btn btn-default btn-block btn-flat">.btn-block .btn-flat</button>
                    <button type="button" class="btn btn-default btn-block btn-sm">.btn-block .btn-sm</button>
                </div>
            </div>
            <!-- /.box -->

            <!-- Horizontal grouping -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Horizontal Button Group</h3>
                </div>
                <div class="box-body table-responsive pad">
                    <p>
                        Horizontal button groups are easy to create with bootstrap. Just add your buttons
                        inside <code>&lt;div class="btn-group"&gt;&lt;/div&gt;</code>
                    </p>

                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Button</th>
                            <th>Icons</th>
                            <th>Flat</th>
                            <th>Dropdown</th>
                        </tr>
                        <!-- Default -->
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Left</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Right</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">1</button>
                                    <button type="button" class="btn btn-default">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- ./default -->
                        <!-- Info -->
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info">Left</button>
                                    <button type="button" class="btn btn-info">Middle</button>
                                    <button type="button" class="btn btn-info">Right</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-info btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-info btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-info">1</button>
                                    <button type="button" class="btn btn-info">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /. info -->
                        <!-- /.danger -->
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">Left</button>
                                    <button type="button" class="btn btn-danger">Middle</button>
                                    <button type="button" class="btn btn-danger">Right</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-danger">1</button>
                                    <button type="button" class="btn btn-danger">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.danger -->
                        <!-- warning -->
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning">Left</button>
                                    <button type="button" class="btn btn-warning">Middle</button>
                                    <button type="button" class="btn btn-warning">Right</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning">1</button>
                                    <button type="button" class="btn btn-warning">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.warning -->
                        <!-- success -->
                        <tr>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">Left</button>
                                    <button type="button" class="btn btn-success">Middle</button>
                                    <button type="button" class="btn btn-success">Right</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-success">1</button>
                                    <button type="button" class="btn btn-success">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.success -->
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.box -->

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Button Addon</h3>
                </div>
                <div class="box-body">
                    <p>With dropdown</p>

                    <div class="input-group margin">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p>Normal</p>

                    <div class="input-group margin">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">Action</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p>Flat</p>

                    <div class="input-group margin">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- split buttons box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Split buttons</h3>
                </div>
                <div class="box-body">
                    <!-- Split button -->
                    <p>Normal split buttons:</p>

                    <div class="margin">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default">Action</button>
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info">Action</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger">Action</button>
                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success">Action</button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">Action</button>
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- flat split buttons -->
                    <p>Flat split buttons:</p>

                    <div class="margin">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-flat">Action</button>
                            <button type="button" class="btn btn-default btn-flat dropdown-toggle"
                                    data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-info btn-flat">Action</button>
                            <button type="button" class="btn btn-info btn-flat dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-danger btn-flat">Action</button>
                            <button type="button" class="btn btn-danger btn-flat dropdown-toggle"
                                    data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-flat">Action</button>
                            <button type="button" class="btn btn-success btn-flat dropdown-toggle"
                                    data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning btn-flat">Action</button>
                            <button type="button" class="btn btn-warning btn-flat dropdown-toggle"
                                    data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- end split buttons box -->

            <!-- social buttons -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Social Buttons (By <a
                                href="https://github.com/lipis/bootstrap-social">Lipis</a>)
                    </h3>
                </div>
                <div class="box-body">
                    <a class="btn btn-block btn-social btn-bitbucket">
                        <i class="fa fa-bitbucket"></i> Sign in with Bitbucket
                    </a>
                    <a class="btn btn-block btn-social btn-dropbox">
                        <i class="fa fa-dropbox"></i> Sign in with Dropbox
                    </a>
                    <a class="btn btn-block btn-social btn-facebook">
                        <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                    <a class="btn btn-block btn-social btn-flickr">
                        <i class="fa fa-flickr"></i> Sign in with Flickr
                    </a>
                    <a class="btn btn-block btn-social btn-foursquare">
                        <i class="fa fa-foursquare"></i> Sign in with Foursquare
                    </a>
                    <a class="btn btn-block btn-social btn-github">
                        <i class="fa fa-github"></i> Sign in with GitHub
                    </a>
                    <a class="btn btn-block btn-social btn-google">
                        <i class="fa fa-google-plus"></i> Sign in with Google
                    </a>
                    <a class="btn btn-block btn-social btn-instagram">
                        <i class="fa fa-instagram"></i> Sign in with Instagram
                    </a>
                    <a class="btn btn-block btn-social btn-linkedin">
                        <i class="fa fa-linkedin"></i> Sign in with LinkedIn
                    </a>
                    <a class="btn btn-block btn-social btn-tumblr">
                        <i class="fa fa-tumblr"></i> Sign in with Tumblr
                    </a>
                    <a class="btn btn-block btn-social btn-twitter">
                        <i class="fa fa-twitter"></i> Sign in with Twitter
                    </a>
                    <a class="btn btn-block btn-social btn-vk">
                        <i class="fa fa-vk"></i> Sign in with VK
                    </a>
                    <br>

                    <div class="text-center">
                        <a class="btn btn-social-icon btn-bitbucket"><i class="fa fa-bitbucket"></i></a>
                        <a class="btn btn-social-icon btn-dropbox"><i class="fa fa-dropbox"></i></a>
                        <a class="btn btn-social-icon btn-facebook"><i class="fa fa-facebook"></i></a>
                        <a class="btn btn-social-icon btn-flickr"><i class="fa fa-flickr"></i></a>
                        <a class="btn btn-social-icon btn-foursquare"><i class="fa fa-foursquare"></i></a>
                        <a class="btn btn-social-icon btn-github"><i class="fa fa-github"></i></a>
                        <a class="btn btn-social-icon btn-google"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-instagram"><i class="fa fa-instagram"></i></a>
                        <a class="btn btn-social-icon btn-linkedin"><i class="fa fa-linkedin"></i></a>
                        <a class="btn btn-social-icon btn-tumblr"><i class="fa fa-tumblr"></i></a>
                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                        <a class="btn btn-social-icon btn-vk"><i class="fa fa-vk"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.box -->

        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <!-- Application buttons -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Application Buttons</h3>
                </div>
                <div class="box-body">
                    <p>Add the classes <code>.btn.btn-app</code> to an <code>&lt;a&gt;</code> tag to achieve the
                        following:</p>
                    <a class="btn btn-app">
                        <i class="fa fa-edit"></i> Edit
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-play"></i> Play
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-repeat"></i> Repeat
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-pause"></i> Pause
                    </a>
                    <a class="btn btn-app">
                        <i class="fa fa-save"></i> Save
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-yellow">3</span>
                        <i class="fa fa-bullhorn"></i> Notifications
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-green">300</span>
                        <i class="fa fa-barcode"></i> Products
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-purple">891</span>
                        <i class="fa fa-users"></i> Users
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-teal">67</span>
                        <i class="fa fa-inbox"></i> Orders
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-aqua">12</span>
                        <i class="fa fa-envelope"></i> Inbox
                    </a>
                    <a class="btn btn-app">
                        <span class="badge bg-red">531</span>
                        <i class="fa fa-heart-o"></i> Likes
                    </a>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
            <!-- Various colors -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Different colors</h3>
                </div>
                <div class="box-body">
                    <p>Mix and match with various background colors. Use base class <code>.btn</code> and add any
                        available
                        <code>.bg-*</code> class</p>
                    <!-- You may notice a .margin class added
                    here but that's only to make the content
                    display correctly without having to use a table-->
                    <p>
                        <button type="button" class="btn bg-maroon btn-flat margin">.btn.bg-maroon.btn-flat</button>
                        <button type="button" class="btn bg-purple btn-flat margin">.btn.bg-purple.btn-flat</button>
                        <button type="button" class="btn bg-navy btn-flat margin">.btn.bg-navy.btn-flat</button>
                        <button type="button" class="btn bg-orange btn-flat margin">.btn.bg-orange.btn-flat</button>
                        <button type="button" class="btn bg-olive btn-flat margin">.btn.bg-olive.btn-flat</button>
                    </p>

                    <p>
                        <button type="button" class="btn bg-maroon margin">.btn.bg-maroon</button>
                        <button type="button" class="btn bg-purple margin">.btn.bg-purple</button>
                        <button type="button" class="btn bg-navy margin">.btn.bg-navy</button>
                        <button type="button" class="btn bg-orange margin">.btn.bg-orange</button>
                        <button type="button" class="btn bg-olive margin">.btn.bg-olive</button>
                    </p>
                </div>
            </div>
            <!-- /.box -->

            <!-- Vertical grouping -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Vertical Button Group</h3>
                </div>
                <div class="box-body table-responsive pad">

                    <p>
                        Vertical button groups are easy to create with bootstrap. Just add your buttons
                        inside <code>&lt;div class="btn-group-vertical"&gt;&lt;/div&gt;</code>
                    </p>

                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <th>Button</th>
                            <th>Icons</th>
                            <th>Flat</th>
                            <th>Dropdown</th>
                        </tr>
                        <!-- Default -->
                        <tr>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-default">Top</button>
                                    <button type="button" class="btn btn-default">Middle</button>
                                    <button type="button" class="btn btn-default">Bottom</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-default"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-default btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-default">1</button>
                                    <button type="button" class="btn btn-default">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- ./default -->
                        <!-- Info -->
                        <tr>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-info">Top</button>
                                    <button type="button" class="btn btn-info">Middle</button>
                                    <button type="button" class="btn btn-info">Bottom</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-info"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-info btn-flat"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-info btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-info btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-info">1</button>
                                    <button type="button" class="btn btn-info">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /. info -->
                        <!-- /.danger -->
                        <tr>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-danger">Top</button>
                                    <button type="button" class="btn btn-danger">Middle</button>
                                    <button type="button" class="btn btn-danger">Bottom</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-danger btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-danger">1</button>
                                    <button type="button" class="btn btn-danger">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-danger dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.danger -->
                        <!-- warning -->
                        <tr>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-warning">Top</button>
                                    <button type="button" class="btn btn-warning">Middle</button>
                                    <button type="button" class="btn btn-warning">Bottom</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-warning btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-warning">1</button>
                                    <button type="button" class="btn btn-warning">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-warning dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.warning -->
                        <!-- success -->
                        <tr>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-success">Top</button>
                                    <button type="button" class="btn btn-success">Middle</button>
                                    <button type="button" class="btn btn-success">Bottom</button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-left"></i>
                                    </button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-center"></i>
                                    </button>
                                    <button type="button" class="btn btn-success"><i class="fa fa-align-right"></i>
                                    </button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-left"></i></button>
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-center"></i></button>
                                    <button type="button" class="btn btn-success btn-flat"><i
                                                class="fa fa-align-right"></i></button>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group-vertical">
                                    <button type="button" class="btn btn-success">1</button>
                                    <button type="button" class="btn btn-success">2</button>

                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Dropdown link</a></li>
                                            <li><a href="#">Dropdown link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- /.success -->
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Quick Example</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1"
                                   placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->

            <!-- Form Element sizes -->
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Different Height</h3>
                </div>
                <div class="box-body">
                    <input class="form-control input-lg" type="text" placeholder=".input-lg">
                    <br>
                    <input class="form-control" type="text" placeholder="Default input">
                    <br>
                    <input class="form-control input-sm" type="text" placeholder=".input-sm">
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Different Width</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-3">
                            <input type="text" class="form-control" placeholder=".col-xs-3">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" placeholder=".col-xs-4">
                        </div>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" placeholder=".col-xs-5">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- Input addon -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Input Addon</h3>
                </div>
                <div class="box-body">
                    <div class="input-group">
                        <span class="input-group-addon">@</span>
                        <input type="text" class="form-control" placeholder="Username">
                    </div>
                    <br>

                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon">.00</span>
                    </div>

                    <h4>With icons</h4>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <br>

                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-check"></i></span>
                    </div>
                    <br>

                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        <input type="text" class="form-control">
                        <span class="input-group-addon"><i class="fa fa-ambulance"></i></span>
                    </div>

                    <h4>With checkbox and radio inputs</h4>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group">
                        <span class="input-group-addon">
                          <input type="checkbox">
                        </span>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <div class="input-group">
                        <span class="input-group-addon">
                          <input type="radio">
                        </span>
                                <input type="text" class="form-control">
                            </div>
                            <!-- /input-group -->
                        </div>
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->

                    <h4>With buttons</h4>

                    <p class="margin">Large: <code>.input-group.input-group-lg</code></p>

                    <div class="input-group input-group-lg">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Action
                                <span class="fa fa-caret-down"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p class="margin">Normal</p>

                    <div class="input-group">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-danger">Action</button>
                        </div>
                        <!-- /btn-group -->
                        <input type="text" class="form-control">
                    </div>
                    <!-- /input-group -->
                    <p class="margin">Small <code>.input-group.input-group-sm</code></p>

                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat">Go!</button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Horizontal Form</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> Remember me
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-info pull-right">Sign in</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
            <!-- general form elements disabled -->
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">General Elements</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form role="form">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Text</label>
                            <input type="text" class="form-control" placeholder="Enter ...">
                        </div>
                        <div class="form-group">
                            <label>Text Disabled</label>
                            <input type="text" class="form-control" placeholder="Enter ..." disabled="">
                        </div>

                        <!-- textarea -->
                        <div class="form-group">
                            <label>Textarea</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Textarea Disabled</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." disabled=""></textarea>
                        </div>

                        <!-- input states -->
                        <div class="form-group has-success">
                            <label class="control-label" for="inputSuccess"><i class="fa fa-check"></i> Input with
                                success</label>
                            <input type="text" class="form-control" id="inputSuccess" placeholder="Enter ...">
                            <span class="help-block">Help block with success</span>
                        </div>
                        <div class="form-group has-warning">
                            <label class="control-label" for="inputWarning"><i class="fa fa-bell-o"></i> Input with
                                warning</label>
                            <input type="text" class="form-control" id="inputWarning" placeholder="Enter ...">
                            <span class="help-block">Help block with warning</span>
                        </div>
                        <div class="form-group has-error">
                            <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> Input
                                with
                                error</label>
                            <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                            <span class="help-block">Help block with error</span>
                        </div>

                        <!-- checkbox -->
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Checkbox 1
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                    Checkbox 2
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" disabled="">
                                    Checkbox disabled
                                </label>
                            </div>
                        </div>

                        <!-- radio -->
                        <div class="form-group">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"
                                           checked="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3"
                                           disabled="">
                                    Option three is disabled
                                </label>
                            </div>
                        </div>

                        <!-- select -->
                        <div class="form-group">
                            <label>Select</label>
                            <select class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Disabled</label>
                            <select class="form-control" disabled="">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                        <!-- Select multiple-->
                        <div class="form-group">
                            <label>Select Multiple</label>
                            <select multiple="" class="form-control">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Multiple Disabled</label>
                            <select multiple="" class="form-control" disabled="">
                                <option>option 1</option>
                                <option>option 2</option>
                                <option>option 3</option>
                                <option>option 4</option>
                                <option>option 5</option>
                            </select>
                        </div>

                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
@stop