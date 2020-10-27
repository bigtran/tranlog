# translog
blog application based on webman

# 当前状态
开发中...
首页出来了...
![首页图片](http://bigtran.opmonitor.com/home.png)

# ToDos
- [x] 增加一些常用函数库
- [ ] 目录结构优化
- [ ] 学习wordpress，要有一个初始分类、文章、评论
- [ ] 功能设计
    * [ ] blog.db  系统初始话，生成一个基本信息表
    * [ ] 使用文件监控类，监控文章变化
    * [x] achieve
        - [ ] by category / tag / keywords —— 基础功能
        - [ ] by time
    * [ ] rss
    * [ ] 评论 和 留言 gitalk，或者用一个简单的sqlite？
    * [ ] 一些配置项
    * [ ] 加密访问 => 用插件完成
- [ ] 最后一步，清理代码，发布
    - [ ] 原有的webman代码不动，不改
- [ ] 补充文档
- [ ] 插件功能
    - hook 列表



# thanks to
- spyc: YAML loader https://github.com/mustangostang/spyc.git
- parsedown: Markdown Parser https://github.com/erusev/parsedown
- editor.md: https://github.com/pandao/editor.md
- rss spec: https://www.rssboard.org/rss-specification
- rss xml generator: https://github.com/zelenin/RSS-Generator
- gitalk: https://github.com/gitalk/gitalk/blob/master/readme-cn.md
- jekyll: http://jekyllcn.com/docs/home/
- https://forestry.io
- wordpress plugin: https://codex.wordpress.org/zh-cn:%E6%8F%92%E4%BB%B6_API
- https://www.wpzhiku.com/document/plugins-hooks/
- https://www.wpdaxue.com/wordpress-theme-development.html#toc-37
