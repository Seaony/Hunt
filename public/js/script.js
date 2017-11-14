var Applocation = {
    init: function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Authorization': $('meta[name="api_token"]').attr('content')
            }
        })

        $('[data-toggle="tooltip"]').tooltip()

        $('.destroy').on('click', function (event) {
            event.preventDefault()
            var url = $(this).attr('href')
            iziToast.question({
                timeout: 10000,
                close: false,
                overlay: true,
                toastOnce: true,
                backgroundColor: '#DC143C',
                theme: 'dark',
                progressBarColor: '#fff',
                id: 'Notice_Delete',
                zindex: 999,
                title: '警告',
                message: '确定要执行删除操作吗?',
                position: 'center',
                buttons: [
                    ['<button><b>确定</b></button>', function (instance, toast) {
                        instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')
                        $.ajax({
                            type: 'POST',
                            url: url,
                            data: {_method: 'delete'},
                            success: respond => {
                                return respond.status
                                    ? succeed(respond.message, window.location.href)
                                    : failed(respond.message)
                            }
                        })
                    }],
                    ['<button>取消</button>', function (instance, toast) {
                        instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')
                    }]
                ]
            })
        })

        $('.loon').each(function () {
            if ($(this).attr('href') == window.location.href) {
                $(this).parent().addClass('active').parent().parent().addClass('active')
            }
        })

        $('.loon').on('click', function () {
            $('.loon').parent().removeClass('active').parent().parent().removeClass('active')
            $(this).parent().addClass('active').parent().parent().addClass('active')
        })

        window.failed = (message, url = null) => iziToast.error({
            title: message,
            transitionIn: 'fadeInDown',
            zindex: 9999999999999,
            onClosed: () => {
                if (url !== null) return typeof url == 'function' ? url() : to(url)
            }
        })

        window.succeed = (message, url = null) => iziToast.success({
            title: message,
            transitionIn: 'fadeInDown',
            zindex: 9999999999999,
            onClosed: () => {
                if (url !== null) return typeof url == 'function' ? url() : to(url)
            }
        })

        window.to = url => $('#anchor').attr('href', url).click()

        window.toSubmit = function (init) {
            $.ajax({
                type: init.method,
                url: init.action,
                data: init.el.serialize(),
                success: respond => {
                    return respond.status
                        ? (init.callback
                            ? init.callback()
                            : succeed(respond.message, init.jump))
                        : failed(respond.message)
                }
            })
        }

        try {
            $(".imodal").iziModal({
                overlayClose: true,
                width: 600,
                overlayColor: 'rgba(0, 0, 0, 0.6)',
                transitionIn: 'bounceInDown',
                transitionOut: 'bounceOutDown',
                navigateCaption: true,
                overlayColor: 'rgba(0, 0, 0, 0.2)',
                navigateArrows: 'closeScreenEdge',
            })

            $('.btn-imodal').on('click', function () {
                $($(this).attr('modal-target')).iziModal('open')
            })
        } catch (e) {

        }

        $(document).on('click', '.trigger', function (event) {
            event.preventDefault()
            try {
                var iframe = document.createElement('div')
                var url = $(this).attr('iframeurl')
                var title = $(this).children('.card').children('.card-content').children('.card-title').text()
                var subtitle = $(this).children('.card').children('.card-footer').children('.stats').children('.subtitle').text()
            } catch (e) {

            }

            $(iframe).iziModal({
                top: '5%',
                headerColor: '#BDCDDE',
                background: '#eef5f9',
                title: title || '糖果盒子',
                subtitle: subtitle || '你点过小盒子的链接都会出现在这里噢。',
                icon: 'fa fa-bookmark',
                overlayClose: true,
                iframe: true,
                width: '90%',
                iframeURL: url,
                fullscreen: true,
                openFullscreen: true,
                borderBottom: true,
                onFullscreen: function (modal) {
                    console.log(modal.isFullscreen)
                }
            })
            $(iframe).iziModal('open')
        })

        $('.search-card').on('input', function (event) {
            var keyword = $(this).val()
            if (!keyword) return $('.col-md-3').show()
            $('.col-md-3').each(function () {
                var text = $(this).children('.trigger').children('.card').children('.card-content').children('.card-title').text()
                if (text.toLowerCase().indexOf(keyword.toLowerCase()) != -1) {
                    $(this).show()
                } else {
                    $(this).hide()
                }
            })
        })


        // 全选
        $('.select-all').on('click', function () {
            $('.table-check').click()
        })

        // 批量删除
        $('.btn-batch').on('click', function () {
            var url = $(this).attr('batch-url')
            iziToast.question({
                timeout: 10000,
                close: false,
                overlay: true,
                toastOnce: true,
                backgroundColor: '#DC143C',
                theme: 'dark',
                progressBarColor: '#fff',
                id: 'Notice_Delete',
                zindex: 999,
                title: '警告',
                message: '确定要执行批量删除操作吗?',
                position: 'center',
                buttons: [
                    ['<button><b>确定</b></button>', function (instance, toast) {
                        instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')
                        var id = []
                        $('.table-check').each(function () {
                            if ($(this).is(":checked")) id.push($(this).val())
                        })
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {id: id, _method: 'delete'},
                            async: false,
                            success: function (respond) {
                                return respond.status
                                    ? succeed(respond.message, window.location.href)
                                    : failed(respond.message)
                            }
                        })
                    }],
                    ['<button>取消</button>', function (instance, toast) {
                        instance.hide(toast, {transitionOut: 'fadeOut'}, 'button')
                    }]
                ]
            })
        })

        /**
         * 退出登录
         */
        $('#logout').on('click', function (event) {
            event.preventDefault()
            $.get($(this).attr('href'), {}, respond => {
                window.location.reload()
            })
        })

        /**
         * 清除缓存
         */
        $('#cache-clear').on('click', function (event) {
            event.preventDefault()
            $.get($(this).attr('href'), {}, respond => {
                succeed(respond.message, () => {
                    window.location.reload()
                })
            })
        })

        // 搜索
        $('.table-search').on('click',function (event) {
            var keyword = $(this).parent().prev().val()
            Url.updateSearchParam('keyword',keyword)
            to(window.location.href)
        })

        $('.table-select').on('change',function () {
            var name = $(this).attr('name')
            var value = $(this).val()
            Url.updateSearchParam(name,value)
            to(window.location.href)
        })

        $('body').scrollspy({ target: '#tag-list' ,offset:150})

        $('.to-link').on('click',function () {
            event.preventDefault()
            var container = $($(this).attr('href'))
            $("html,body").animate({scrollTop:container.offset().top},500)
        })

        $('#Friend-links').on('click', function () {
            event.preventDefault()

            var iframe = document.createElement('div')
            var url = $(this).attr('href')
            var title = '可爱的的小伙伴们'
            var subtitle = '交换友链请联系 Seaony:『 seaony@outlook.com 』。'

            $(iframe).iziModal({
                top: '5%',
                headerColor: '#BDCDDE',
                background: '#eef5f9',
                title: title,
                subtitle: subtitle,
                icon: 'fa fa-bookmark',
                overlayClose: true,
                iframe: true,
                width: '90%',
                iframeURL: url,
                fullscreen: true,
                openFullscreen: true,
                borderBottom: true,
            })
            $(iframe).iziModal('open')
        })

        $('#About-Me').on('click',function () {
            event.preventDefault()

            var iframe = document.createElement('div')
            var url = $(this).attr('href')
            var title = '关于作者'
            var subtitle = 'After all this time? Always。'

            $(iframe).iziModal({
                top: '5%',
                headerColor: '#BDCDDE',
                background: '#eef5f9',
                title: title,
                subtitle: subtitle,
                icon: 'fa fa-bookmark',
                overlayClose: true,
                iframe: true,
                width: '90%',
                iframeURL: url,
                fullscreen: true,
                openFullscreen: true,
                borderBottom: true,
            })
            $(iframe).iziModal('open')
        })

        window.nominates = function nominates(el) {
            event.preventDefault()
            var el = $(el)
            $.ajax({
                type: el.attr('method'),
                url: el.attr('action'),
                data: el.serialize(),
                success: respond => {
                    if (respond.status) {
                        el[0].reset()
                        $('#nominate-modal').iziModal('close')
                        return succeed(respond.message)
                    } else {
                        return failed(respond.message)
                    }
                }
            })
        }

        window.proposals = function proposals(el) {
            event.preventDefault()
            var el = $(el)
            $.ajax({
                type: el.attr('method'),
                url: el.attr('action'),
                data: el.serialize(),
                success: respond => {
                    if (respond.status) {
                        el[0].reset()
                        $('#proposal-modal').iziModal('close')
                        return succeed(respond.message)
                    } else {
                        return failed(respond.message)
                    }
                }
            })

        }

        $('.btn-file').on('click', function () {
            var self = $(this)
            var input = document.createElement('input')
            input.setAttribute('type', 'file')
            input.click()

            $(input).on('change', function () {
                var formData = new FormData();
                formData.append('file', $(this)[0].files[0]);
                $.ajax({
                    url: '/admin/upload',
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function (respond) {
                        return respond.status ? self.parent().prev().val(respond.data.url) : failed(respond.message)
                    },
                    error: function (responseStr) {
                        failed('文件上传失败！')
                    }
                });
            })
        })

        $('.favour').click(function () {
            try {
                var self = $(this)
                event.preventDefault()
                if (self.hasClass('active')) {
                    self.children('.count').text(parseInt(self.children('.count').text())-1)
                } else {
                    self.children('.count').text(parseInt(self.children('.count').text())+1)
                }
                self.toggleClass('active')
                $.get(self.attr('href'),{},() => {})
            } catch (e) {

            }
        })

        $('.rm-favour').click(function () {
            event.preventDefault()
            var self = $(this)
            self.removeClass('active')
            self.parent().parent().parent().fadeOut()
            $.get(self.attr('href'), {}, () => {
            })
        })

        $('.incrment').on('click', function () {
            var count = $(this).next().children('.read').children('span')
            count.text(parseInt(count.text()) + 1)
        })
    }
}

$(document).ready(function () {
    Applocation.init()
    $(document).pjax('a:not(a[target="_blank"])', '#main', {timeout: 1600, maxCacheLength: 500})
    $(document).on('pjax:start', function () {
        NProgress.start()
    })
    $(document).on('pjax:end', function () {
        NProgress.done()
        Applocation.init()
    })
})