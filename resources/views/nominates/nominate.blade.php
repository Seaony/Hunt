<div id="nominate-modal" class="imodal">
    <form action="{{ route('nominates.store') }}" onsubmit="nominates(this)" method="post">
        <button data-iziModal-close class="fa fa-times console"></button>
        <p class="title">好站推荐</p>
        <p class="description">我们会对你推荐的站点进行审核，非常感谢你的推荐。</p>
        <div class="form-group">
            <label><i class="fa fa-link"></i> 站点链接</label>
            <input type="text" name="link" placeholder="请输入你想要推荐的站点链接。" class="form-control">
        </div>
        <div class="form-group">
            <label><i class="fa fa-file-text"></i> 站点简述</label>
            <input type="text" name="describe" placeholder="请输入你对此站点的简单描述。" class="form-control">
        </div>
        <div class="form-group">
            <label><i class="fa fa-user"></i> 你的名字</label>
            <input type="text" name="name" placeholder="如果你推荐的站点被采纳，那么其他用户查看此站点时可以看到你的名称。" class="form-control">
        </div>
        <button type="submit" class="btn btn-info"><i class="fa fa-check"></i> 确定推荐</button>
    </form>
</div>