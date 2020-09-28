# translog
blog application based on webman

# 当前状态
开发中...
首页出来了...
![首页图片](/public/home.png)

# ToDos
- [x] 取个名字 translog = webman blog program
- [x] 配置开发环境 nginx virtual host 80 端口 转发 workman 8787
- [x] Test.php 把 https://www.workerman.net/doc/webman#/ 中的示例都实现一遍
    - 新增一个branch 当做 webman的学习
- [x] 简化一下 mysqli 操作类，直接用sql
    - 增加 mysqli functions，加载到 autoload里
- [x] 增加一些常用函数库
- [x] 增加类Hugo的 yaml 文章解析
- [ ] 功能设计
    * [x] post
    * [ ]page
        - [ ] about
        - [ ] category / tag / keywords
    * [ ] achieve
    * [ ] rss
    * [ ] blog.db  系统初始话，生成一个基本信息表
    * [ ] 评论 和 留言 gitalk
- [ ] 模板设计
    * 初始化一个简洁的模板！
- [ ] 文章存储
    * 使用数据库存储？
    * 还是从github repo读取文件？
    * 还是从有道云笔记读取？



# thanks to
- spyc: YAML loader https://github.com/mustangostang/spyc.git
- parsedown: Markdown Parser https://github.com/erusev/parsedown
- rss spec: https://www.rssboard.org/rss-specification
- rss xml generator: https://github.com/zelenin/RSS-Generator
- gitalk: https://github.com/gitalk/gitalk/blob/master/readme-cn.md
