# translog
blog application based on webman

# 当前状态
开发中...
首页出来了...
![首页图片](http://bigtran.opmonitor.com/home.png)

# ToDos
- [x] 取个名字 translog = webman blog program
- [x] 配置开发环境 nginx virtual host 80 端口 转发 workman 8787
- [x] Test.php 把 https://www.workerman.net/doc/webman#/ 中的示例都实现一遍
    - 新增一个branch 当做 webman的学习
- [x] 简化一下 mysqli 操作类，直接用sql
    - 增加 mysqli functions，加载到 autoload里
- [x] 增加一些常用函数库
- [x] 增加类Hugo的 yaml 文章解析
    - [x] site.yml 配置文件定义
    - [x] *.md 中 文章信息配置部分
- [ ] 目录结构优化
- [x] 编辑一系列测试用的文章 —— 《孙子兵法》
- [x] 学习wordpress，要有一个初始分类、文章、评论
    - [ ] 文章要好好写一下
- [ ] 功能设计
    * [ ] blog.db  系统初始话，生成一个基本信息表
    * [x] post
    * [x] markdown 语言解析，想想还是用js来处理
    * [x] page  => .html / .php ?
        - [x] about
    * [x] achieve
        - [ ] by category / tag / keywords —— 基础功能
        - [ ] by time
    * [ ] rss
    * [ ] 评论 和 留言 gitalk，或者用一个简单的sqlite？
    * [x] 基本函数
    * [ ] 一些配置项
    * [ ] 加密访问 => 用插件完成
- [x] 模板设计
    * [x] 初始化一个简洁的模板！ —— ThreeLittleBirds
    * [x] 再初始化一个简洁模板，用来做文档！ —— EasySkanking ? 
    * [x] 参考wordpress的函数式版面
- [x] 文章存储
    * 使用数据库存储？
    * 还是从github repo读取文件？
    * 还是从有道云笔记读取？
    * 最后想了一下，还是用md文件存储得了，为什么？省事！
- [ ] 最后一步，清理代码，发布
    - [ ] 原有的webman代码不动，不改
- [ ] 补充文档



# thanks to
- spyc: YAML loader https://github.com/mustangostang/spyc.git
- parsedown: Markdown Parser https://github.com/erusev/parsedown
- editor.md: https://github.com/pandao/editor.md
- rss spec: https://www.rssboard.org/rss-specification
- rss xml generator: https://github.com/zelenin/RSS-Generator
- gitalk: https://github.com/gitalk/gitalk/blob/master/readme-cn.md
- jekyll: http://jekyllcn.com/docs/home/
- https://forestry.io
