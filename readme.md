swoole编程学习
========
#初步接触swoole
在这几天接触过不少次php环境搭建，拓展的编译配置，成功配置了swoole拓展，redis拓展,初始运用的集成环境，试过lnmp、xampp等，最后感觉自己在linux下php开发可以很简单，将所有的集成环境卸载了，编译php7源程序安装，在编译到一半的过程中遇到过一个错误，makefile文件的一个集成编译项后少了一个编译项，EXTRA_LIBS = ..... -lcrypt -liconv，再次编译通过。拓展的安装大概phpize->configure->make。
##学到php中的知识点
1.swoole服务需要使用php的cli运行。

2.ob_start()、ob_get_contents()、ob_end_clean()等操作缓冲区的系列函数参考博客[PHP ob系列函数详解](http://www.cnblogs.com/doseoer/p/5655602.html) ，[PHP中的ob_start用法详解](http://www.cnblogs.com/w10234/p/5480670.html)。
##swool学习
1.基础的swoole服务运行，配置，接口。

2.可以将swoole运行程序守护进程化。server配置中的daemonize设置为1。文档很重要。
##其他知识点
1.在linux中查看进程 ps  auxf|grep servername。

2.统计数量  ps  auxf|grep servername|wc -l。

3.压力测试 ab -c 100 -n 1000 http://127.0.0.1:9501/a.php模拟100个用户1000次请求此地址。




