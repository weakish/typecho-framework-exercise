typecho-framework-exercise
==========================

Exercises for learning  typecho framework

入口是 index.php。

- /hello
    Hello world
- /hi
    模板输出Hello world
- /hi?name=somebody
    传入参数
- /helloworld
    注入Ending类（Ending类就是输出一个'End'字符串）
- /jobs?id=999&time=today&user=weakish
    写入job到数据库，并返回该job（json）,若job id已存在，返回`{"Error:":"Job already exist!"}`


