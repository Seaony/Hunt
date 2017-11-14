<div id="proposal-modal" class="imodal">
    <form action="{{ route('proposals.store') }}" onsubmit="proposals(this)" method="post">
        <button data-iziModal-close class="fa fa-times console"></button>
        <p class="title">建议反馈</p>
        <p class="description">你的每一条建议都很宝贵，感谢阁下的反馈。</p>
        <div class="form-group">
            <label><i class="fa fa-inbox"></i> 反馈建议</label>
            <input type="text" name="content" class="form-control" placeholder="请输入你的反馈建议。">
        </div>
        <div class="form-group">
            <label><i class="fa fa-user"></i>  你的名字</label>
            <input type="text" name="name" class="form-control" placeholder="请留下你的尊姓大名。">
        </div>
        <div class="form-group">
            <label><i class="fa fa-envelope"></i>  邮箱地址</label>
            <input type="email" name="email" class="form-control" placeholder="我们会将改进结果发送至你的邮箱。">
        </div>
        <button type="submit" class="btn btn-info">
            <i class="fa fa-check"></i> 提交反馈
        </button>
    </form>
</div>