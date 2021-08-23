

<DOCTYPE html>
    <html>
            <head>
                    <meta charset="utf-8">
                    <title>实验项目</title>
                    <script type="text/javascript" src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=AM_HTMLorMML-full"></script>
                    
            </head>
            <body>
    
                    <div  style= "width:556px;margin:0 auto;padding:0 100px" >
                        <!-- 页眉 -->
                    <div style="display: flex;position: relative;height: 60px;border-bottom: 1px solid #464545;">
                        <div>
                            <img src="https://s3.bmp.ovh/imgs/2021/08/0bf5497e7adffd54.png" style="height: 40px;"/>
                        </div>
                        <span style="position: absolute;left: 50%;top:50%;height: 50%;transform: translate(-50%,-50%);color: #898989;font-size: 14px;">《{{$name}}》学生实验报告</span>
                    </div>
                    <!-- 标题 -->
                    <div style="margin: 0 auto;text-align: center;padding-bottom: 20px;padding-top: 3px;">
                        <span style="font-size: 23px;">《{{$name}}》学生实验（项目）报告</span>
                    </div>
                    <!-- 学生信息 -->
                    <h3>一、基本信息</h3>
                    <table border="1" cellpadding = "5" cellspacing = "0" style="margin: 0 auto;">
                        <tr>
                            <td>实验项目名称</td>
                            <td colspan="3">{{$experiment_name}}</td>
                        </tr>
                        <tr>
                            <td>课程名称</td>
                            <td>{{$course_name}}</td>
                            <td>学生层次</td>
                            <td>{{$student_level}}</td>
                        </tr>
                        <tr>
                            <td>学生专业</td>
                            <td>{{$student_spec}}</td>
                            <td>学生年级</td>
                            <td>{{$student_year}}</td>
                        </tr>
                        <tr>
                            <td>学生班级</td>
                            <td>{{$student_class}}</td>
                            <td>学生学号</td>
                            <td>{{$student_num}}</td>
                        </tr>
                        <tr>
                            <td>学生姓名</td>
                            <td>{{$name}}</td>
                            <td>完成日期</td>
                            <td>{{$student_date}}</td>
                        </tr>
                        <tr>
                            <td>指导教师</td>
                            <td colspan="3">{{$student_teacher}}</td>
                        </tr>
                    </table>
                    <span style="color: red;">以下内容应为学生项目成果，由指导教师自行定义。</span>
                    <!-- 实验目的 -->
                    <h3>二、实验目的</h3>
                    <!-- 实验步骤 -->
                    <h3>三、实验步骤（及实验数据）</h3>






                    <!-- 原视图 -->
                    <h3>二、实验目的</h3>
                    <p>学习利用尖劈测量细丝直径。</p>
                    <h3>三、实验仪器与设备</h3>
                    <p>读数显微镜、钠光灯、电源、牛顿环装置。</p>
                    <h3>四、实验原理</h3>
                    <p style="text-align:center">
                        <img src="https://isekko-1306311182.cos.ap-nanjing.myqcloud.com/%E5%9B%BE%E7%89%871.jpg"  height="150" width="200">
                         
                    </p>
                    <p>如图上所示，两片叠在一起的玻璃片，在它们的一端夹一直径待测的细丝，于是两玻
                    璃片之间形成一层厚度不均匀的空气劈尖。单色光从上方垂直入射到透镜上，透过透镜，
                    近似垂直地入射于空气劈尖时，会产生干涉现象。因为光程差相等的地方是平行于两玻璃
                    片交线的直线，所以等厚干涉条纹是一组明暗相间、平行于交线的直线。</p>
                    
                    <p>由于从劈尖的上下表面反射的两条光线来自同一条入射光线，它们满足相干条件并在劈
                    尖的上表面相遇而产生干涉，干涉后的强度由相遇的两条光线的光程差决定，由图可见，二
                    者的光程差 等于劈尖厚度 的两倍，即 </p>
                    <p>此外，当光在空气劈尖的上表面反射时，是从光密媒质射向光疏媒质，反射光不发生相位
                    突变，而在下表面反射时，则会发生相位突变，即在反射点处，反射光的相位与入射光的相位
                    之间相差π，与之对应的光程差为<span>`λ/2`</span>,所以相干的两条光线还具有<span>`λ/2`</span>的附加光程差，总的光程差为</p>
                    <p style="text-align:center"> 
                         <span >`△=△+λ/2=2d`</span><sub>n</sub><span >`+λ/2`</span> (1)
                    </p>
                    <p>当光程差D为半波长的奇数倍时为暗纹，若第n级暗纹处空气劈尖的厚度为 ，则有</P>
                    <p style="text-align:center">
                        <span >`△=2d`</span><sub>n</sub><span>`+λ/2=(2n+1)λ/2,(n=1,2,3,....)`</span>
                        </br>
                        d<sub>n</sub>=n<span>`λ/2`</span> (2)
                    </p>
                    <p>由（2）式可知,n = 0时,d<sub>0</sub>，即在两玻璃片交线处为零级暗条纹。如果在细丝处呈现n = N级条纹，则待测细丝直径为
                    </p>
                    <p style="text-align:center">d<sub>n</sub>=N<span>`λ/2`</span>(3)</p>
                    <p>
                        但是，由于玻璃接触处所到的压力引起了局部的弹性形变，同时因玻璃表面的不洁净所引入
                        的附加程差，使实验中看到的干涉级数并不代表真正的干涉级数n 。为此，我们将（3）式作一
                        些变化，由于干涉条纹是均匀分布的，测量m个条纹的长度为△l，k=m/△l为单位长度的干涉条纹数，L为劈尖两玻璃片交线处
                        到夹细丝处的总长度，则总条纹数N=kL，有
                   </p>
    
                    <p style="text-align:center">
                        d=L<span>`[mλ]/[△l2]`</span>(4)
                    </p>
    
                    <p>
                        可见我们测得单位长度的干涉条纹数k和总长度L，就可用（4）式计算细丝的直径。
                        在实验中，我们在劈尖玻璃面上选择三个不同的部分，测出m=20条暗纹的总长度△l<sub>1</sub>、
                        △l<sub>2</sub>、△l<sub>3</sub>，求其平均值△l及单位长度的干涉条纹数k=<span>`20/[△l]。
                    </p>
                    <p>测三次两玻璃片交线处到夹细丝处的总长度L<sub>1</sub>、L<sub>2</sub>、L<sub>3</sub>,并求其平均值L 。
                       </br>
                       由（4）式，求得细丝的直径
                    </p>
                    <p style="text-align:center">
                        d=N<span>`λ/2`</span>=LK<span>`λ/2`</span>=L<span>`[mλ]/[△l2]`</span>(5)
                    </p>
    
                    <h3>四、实验原理</h3>
                    <p style="text-align:center">
                        <img src="https://isekko-1306311182.cos.ap-nanjing.myqcloud.com/%E5%9B%BE%E7%89%872.jpg" height="150" width="200">
                         {{-- <img src="https://isekko-1306311182.cos.ap-nanjing.myqcloud.com/art/7EzlMb4tOYYrE915q0V58j57qVJ5ax0qPbkW4Sz5.png" height="150" width="200"> --}}
                    </p>
    
                    <p style="text-align:center">
                    A 读数显微镜,G 分束板,N 劈尖, s 钠光灯
                   </p>
    
                <p>
                    <h5>1． 观察干涉条纹。</h5>
                    </br>
    
                        （1） 将劈尖按图4所示放置在读数显微镜镜筒和分束板下方，调节分束板的角度，使通过显微镜目镜观察时视场最亮。
                    </br>
                        （2） 调节目镜，看清目镜视场的十字叉丝后，使显微镜镜筒下降到接近劈尖然后缓慢上升，直到观察到干涉条纹，再微调分束板角度和显微镜，使条纹清晰。
    
                    <h5>2．测量。</h5>
    
                        （1）使显微镜的十字叉丝的竖直丝与尖劈玻璃交线重合，并使水平叉丝与显微镜镜筒移动方向平行。
                    </br>
                        （2）在尖劈玻璃面的三个不同部分，测出20条暗纹的总长度，测3组求平均值。重复测量两玻璃片交线到细丝的长度3次并求平均值。
                    </br>
                        （3）按公式计算细丝直径。
                 </p>
    
    
                 <h3>六、实验数据记录与处理</h3>
                 <p>λ=589nm   L=0.04m </p>
                 <table border="1" cellpadding = "15" cellspacing = "0">
                    <tr>
                        <th></th>
                        <th>x <sub>i</sub></th>
                        <th>x<sub>i+20</sub></th>
                        <th>x<sub>i+40</sub></th>
                        <th>x<sub>i+60</sub></th>
                        <th>x<sub>i+80</sub></th>
                        <th>x<sub>i+100</sub></th>
                    </tr>
                    <tr>
                        <td>读数(mm)</td>
                        <td>{{$completion_1}}</td>
                        <td>{{$completion_2}}</td>
                        <td>{{$completion_3}}</td>
                        <td>{{$completion_4}}</td>
                        <td>{{$completion_5}}</td>
                        <td>{{$completion_6}}</td>
                    </tr>
                    <tr>
                        <td>60条暗条纹的宽度(mm)</td>
                        <td colspan="2">{{$completion_l1}}</td>
                        <td colspan="2">{{$completion_l2}}</td>
                        <td colspan="2">{{$completion_l3}}</td>
                      
                    </tr>
                    <tr>
                        <td>m/△l=3x60/L<sub>1</sub>+L<sub>2</sub>+L<sub>3</sub></td>
                        <td colspan="6">{{$completion_m}}</td>
                        
                    </tr>
                 </table>
                 <p>计算劈尖中细丝的直径d=       {{$completion_d}}  (mm)</p>
    
                 <h3>思考题</h3>
                 <p>
                  
                    1. 两束光在空间相遇产生干涉的条件是：
                 </br>
                    A． 频率相同 B.振动方向相同 C. 相位差恒定，且满足一定条件 D. ABC都是
                </br>
                    答案：{{$completion_xz1}}
                </br>
                2． 劈尖干涉实验中，若测得20个劈尖干涉条纹间隔L1，劈尖条纹总长为L，则其包含的干涉暗条纹总数为：
                </br>
                A．20L/L1  B.20L1/L   CL/(20L1)     D.L1/(20l)
                </br>
                答案：{{$completion_xz2}}
                 </p>

                 <h3>判断题</h3>
                 <p>
                    
                    1. 牛顿环和披肩分别属于等厚干涉和等倾干涉 。
                </br>
                    答案 {{$completion_pd1}}duykgqwekdfweiuydcgfiwueydfgiuyeqgdfiueqfwgd啊觉得胡歌啊的高科技全文啊都无可取代个iu前往德国不定期为该队千万个度诶我UI为法国iu高端复刻我就去搞丢我企鹅打鬼王大哥iu去围观丢的护卫哦全国地区恶搞的
                    </br>
                    2. 劈尖实验，视场很亮，但是调不出干涉条纹，其原因可能是反光玻璃片放反。
                </br>
                    答案 {{$completion_pd2}}
                </br>
                    3. 劈尖实验中，若发现视场半明半暗，则原因是光源亮度不够。
                </br>
                    答案：{{$completion_pd3}}
                 </p>
    
    
                    </div>       
            </body>
    </html>
