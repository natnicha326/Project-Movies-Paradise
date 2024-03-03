<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{

        public function run(): void
{
    $MovieData = [
        [
            'movie_id' => 1,
            'title' => 'พี่นาค 4',
            'poster' => 'https://lh3.googleusercontent.com/w-5QXOQtADTv8eLWTuyWSW4J80H_6MWFIaZL8-p_19j50ap6fAMgETtNj7gwtV6j6ht6wquPCnvjBeJ2afSfljVktitiuEGNix4=w260',
            'synopsis' => 'การกลับมาตาม “สัญญา” ของภาพยนตร์ฮาสยองขวัญใจมหาชน หลังจากผ่านพ้นศึกล้างคำสาปแห่งปฐมบทพี่นาค โทมินจุน (มีน พีรวิชญ์) เซเลบลูกครึ่งไทย-เกาหลี ได้มีโอกาส กลับมาบ้านเกิดในวัยเยาว์ เพื่อช่วยบูรณะโบสถ์เก่าแก่ของวัดประจำชุมชน โดยไม่ลืมควงแขน บอลลูน (เอม วิทวัส) กับ เฟิร์ส (เจมส์ ภูริพรรธน์) ที่ได้รับการอวยยศเป็นผู้จัดการส่วนตัวคุณโทก็มาที่นี่ด้วยเช่นกัน แค่ก้าวแรกที่เดินเข้ามา สัญญาณแห่งความอาฆาตจากผีพี่นาคภายใต้หน้ากากสยอง ก็พุ่งเป้ามาที่คุณโทอย่างจัง คำสัญญาและความเกลียดชังกำลังก่อตัวขึ้นจากความทรงจำในอดีตที่ถูกลืมเลือน',
            'genres' => 'คอมเมดี้,สยองขวัญ',
            'duration' => '112 นาที',
            'director' => 'ภณธฤต โชติกฤษฎาโสภณ',
            'cast' => 'วิทวัส รัตนบุญบารมี,ภูริพรรธน์ เวชวงศาเตชาวัชร์,พีรวิชญ์ อรรถชิตสถาพร,อธิวัตน์ แสงเทียน,รัฐวิทย์ กิจวรลักษณ์',
            'trailer' => 'https://www.youtube.com/watch?v=g0xVjv1JYNE',
            'reviews' => null
        ],
        [
            'movie_id' => 2,
            'title' => '4 KINGS 2',
            'poster' => 'https://lh3.googleusercontent.com/fFJt_7VVXoc8pbKN78R4MOr993AlvcChgZZBGzzS5CNf2cPWmiMWaTZPD4tTWZ5XszclZ-SqR_AruPxE26agc8uPBDWBerUsGQ=w260',
            'synopsis' => 'สานต่อเรื่องราวความเดือดของนักเรียนอาชีวะยุค 90s จากภาคแรกที่ประสบความสำเร็จ กวาดรายได้ 170 ล้านบาท และรางวัลอีกหลายเวที กรุยทางให้สามารถสร้างภาคต่อได้ชนิดที่เรียกว่าจัดเต็ม',
            'genres' => 'แอคชั่น,ดราม่า',
            'duration' => '140 นาที',
            'director' => 'พุฒิพงษ์ นาคทอง',
            'cast' => 'สมพล รุ่งพาณิชย์, สุทธิรักษ์ ทรัพย์วิจิตร, สิราษฎร์ อินทรโชติ, อุกฤษ วิลลีย์ บรอด ดอนกาเบรียล',
            'trailer' => 'https://www.youtube.com/watch?v=1AuAphj2F4w&t=8s',
            'reviews' => null
        ],
        [
            'movie_id' => 3,
            'title' => 'เหมรฺย',
            'poster' => 'https://lh3.googleusercontent.com/8Bd7H8KDnhqWhOrg9Ey9evg6l3mglbPuGSqVSDkGoP1Uf3C_PKZaCGYzFM3bRe5ZXp5jSWKuN8BTGoQFgVIkzzXgJLH-mFcC=w260',
            'synopsis' => 'หลังจากหย่าร้างกับสามี อลิส (เจนนี่ รัชชนก) ต้องรับหน้าที่แม่เลี้ยงเดี่ยวอย่างเต็มรูปแบบ ในการดูแลลูกชายที่เธอรักมากสุดหัวใจอย่าง ออกัส (มังกร ฟาบริซโช่) เด็กหนุ่มวัยอยากรู้ อยากเห็น เขาเติบโตมาพร้อมกับคำถามที่อยู่ในใจตลอดมาเกี่ยวกับ เอ ( ซี ศิวัฒน์) พ่อของตนและเรื่องราวของตนเอง แม้แต่แม่ของเขาเองก็ไม่เคยพูดถึงเรื่องราวเกี่ยวกับพ่อของเขาเลย...เมื่อออกัสอายุครบ 15 ปี เรื่องราวลึกลับบางอย่างเริ่มติดตามตัวเขาทีละน้อย คำสั่งเสียของพ่อก่อนตาย กลายเป็นชนวนเหตุให้ออกัสพบกับความน่าสะพรึงกลัว จากอาถรรพ์ของมโนราห์ ที่พยายามดึงให้เขากลับไปรับรู้วิบากกรรมของตัวเอง ในขณะเดียวกัน อลิส ผู้เป็นแม่ที่เชื่อในเหตุผลและความถูกต้อง',
            'genres' => 'ดราม่า,สยองขวัญ',
            'duration' => '100 นาที',
            'director' => 'เอกชัย ศรีวิชัย',
            'cast' => 'เอกชัย ศรีวิชัย, สนธยา ชิตมณี, รัชนก สุวรรณเกตุ, ศิวัฒน์ โชติชัยชรินทร์',
            'trailer' => 'https://www.youtube.com/watch?v=xztax86FzIY',
            'reviews' => null
        ],
        [
            'movie_id' => 4,
            'title' => 'มาสค์ไรเดอร์ ไฟซ์ ภาค สงครามทวงคืนสวรรค์',
            'poster' => 'https://lh3.googleusercontent.com/Ognuk3kdECvbXlFmWaqP8KGnAdrHsmOLOiHltBv7ivsoiQhM6nxqSG96WsNmBTKMgKsTyaBY9ER19waidv00nwygvpguO8Zq1g=w260',
            'synopsis' => 'โซโนดะ มาริ ที่กำลังมุ่งหน้าไปยังร้านทำความสะอาดของเคทาโร กับโจทาโร่ หลานชายของเธอ และได้พบกับการกลับมาของ นาโอยะ และมาซาโตะ ในขณะเดียวกัน Smart Brain ซึ่งกลายเป็นองค์กรของรัฐได้แปรสภาพเป็นบริษัทใหม่ที่มีเป้าหมายที่จะทำลายล้างชีวิตอัลเฟนอคทั้งหมด และการดำเนินการนี้นำโดย คิตาซากิ

เพื่อปกป้องอัลฟนอคจากการสูญพันธุ์ คุซากะ มาซาโตะ ต้องต่อสู้กับ เรนะ คุรุมิ ผู้บังคับบัญชาของสมาร์ทเบรน ไม่เพียงเท่านั้น เธอยังได้รับความช่วยเหลือจาก อินูอิ ทาคุมิ ที่หายตัวไปเมื่อหลายปีก่อน ซึ่งกลับมาในร่างของ Masked Rider NEXT Faiz ทำไมเขาถึงร่วมมือกับ Smart Brain ได้ ปริศนา และการต่อสู้ครั้งใหม่ที่มีทั้งชีวิตของมนุษณ์ และอัลเฟนอค ได้เริ่มต้นขึ้นแล้ว !',
            'genres' => 'แอคชั่น,ดราม่า,ไซไฟ',
            'duration' => '65 นาที',
            'director' => 'Ryuta Tasaki',
            'cast' => 'Kento Handa, Yuria Haga, Kohei Murakami',
            'trailer' => 'https://www.youtube.com/watch?v=0GSTnvmP6Hs',
            'reviews' => null
        ],
        [
            'movie_id' => 5,
            'title' => 'โคตรพยัคฆ์ชน คนมือทอง',
            'poster' => 'https://lh3.googleusercontent.com/yvyMJyeqXlVOSq2qwnhD1d21I9Nohq9yPlxhPb2hN_WWzzlOC6oYJOwqSxABwC5InldSiiVh3kymjQ3MQ1vmMGxR2G07AtGc=w260',
            'synopsis' => 'เกาะฮ่องกงในยุค 1970s มีหน่วยงานที่ชื่อว่า Independent Commission Against Corruption (ICAC) ซึ่งถูกก่อตั้งขึ้นมาเพื่อปราบปรามองค์กรชั่วร้ายที่นำโดยเจ้าหน้าที่รัฐของประสหราชอาณาจักร โดยหนึ่งในเจ้าหน้าที่สืบสวนที่ยอดเยี่ยมที่สุดของหน่วยงานนี้ได้แก่ เจ้าหน้าที่สืบสวนอาวุโส Lau Kai-Yuen ผู้ที่เคยจัดการกับเจ้าหน้าที่ที่ทุจริตมาแล้วนับไม่ถ้วน แต่ในตอนที่เขาคิดว่าความมั่นคงและรุ่งเรืองกำลังจะมาถึงแล้วนั้น ยุคสมันใหม่ของความโลภและเงินตราก็ทำให้เขาต้องเข้าไปต่อสู้ในสนามรบที่เต็มไปด้วยความสกปรกโสมมครั้งใหม่',
            'genres' => 'อาชญากรรม,ดราม่า',
            'duration' => '125 นาที',
            'director' => 'Felix Chong Man-keung',
            'cast' => 'Charlene Choi, Andy Lau, Tony Leung Chiu-wai',
            'trailer' => 'https://www.youtube.com/watch?v=hnDr_t9q81k',
            'reviews' => null
        ],
        [
            'movie_id' => 6,
            'title' => 'ดาบพิฆาตอสูร : สู่การสั่งสอนของเสาหลัก',
            'poster' => 'https://lh3.googleusercontent.com/NHOFjou5kHV45c2YypYoPuyiFao9bYQJW5ZTVResX9xk3-kidvM4WbuhA0rccujXiS52xYXEGEikGH1qYu4TzZRG4jx7VVIadws=w260',
            'synopsis' => 'เรื่องราวเริ่มต้นจากคามาโดะ ทันจิโร่ เด็กหนุ่มที่ครอบครัวโดนอสูรสังหาร ซึ่งเขาได้ตัดสินใจที่จะเป็น ‘นักล่าอสูร’ เพื่อช่วยให้เนซึโกะ น้องสาวของเขาที่กลายเป็นอสูรกลับคืนสู่มนุษย์ โดยซีซั่นแรกอย่าง ‘เรื่องราวของคามาโดะ ทันจิโร่’ ได้เริ่มออกอากาศเมื่อเมษายน 2019 หลังจากนั้นในเดือนตุลาคม 2020 ได้ออกอากาศภาพยนตร์ที่มีชื่อว่า ‘ศึกรถไฟสู่นิรันดร์’ และมีการออกอากาศอนิเมะ ‘ภาคย่านเริงรมย์’ ในเดือนตุลาคม 2021 ด้วยเช่นกัน และในฤดูใบไม้ผลิปี 2024 อนิเมะซีรี่ย์ใหม่ที่รอคอยกันมาอย่างยาวนานอย่าง ‘การฝึกฝนของเสาหลัก’ ก็ได้มีกำหนดการออกอากาศเป็นที่เรียบร้อยแล้วจิ',
            'genres' => 'อนิเมชั่น',
            'duration' => '105 นาที',
            'director' => 'Haruo Sotozaki',
            'cast' => '-',
            'trailer' => 'https://www.youtube.com/watch?v=epb-AQarKPk',
            'reviews' => null
        ],
        [
            'movie_id' => 7,
            'title' => 'ปิดเมืองล่า',
            'poster' => 'https://lh3.googleusercontent.com/5tx79Mc2h9L2YkO-sJq_9KbQ8hCg1whtshS3OSQVcW0r-LpvGK5jydJwlTSA9GuGUWRu7HGWmeDXpB82gKfiUS6aXEB5OGSc_CU=w260',
            'synopsis' => 'ท่ามกลางเมืองใหญ่ริมชายฝั่ง ที่เต็มไปด้วยแสงสี ทศ เป็นนักฆ่ามือฉกาจของแก็งค์อันธพาลที่พ้นโทษออกมาไม่นาน แต่ชีวิตก็นำพาไปสู่ด้านมืด ยังคงวนเวียนกับการล้างแค้น โดยมี จ่าชัย นายตำรวจใกล้เกษียน แพ้พนันที่บ่อน จึงจำใจขายปืนลูกโม่ทองคำ ให้กับ ไซม่อน เจ้าพ่อธุรกิจเถื่อน ซับซ้อนเข้าใจยาก หลอกใช้จ่าชัยมาช่วยขนส่งทองคำจากกรุงเทพฯ ไปที่พัทยาจนทำให้เกิดเรื่องให้ต้องล่า

หก นักฆ่ามือดี อดีตลูกน้องไซม่อน ถูกขับออกจากแก็งค์ พร้อมบทลงโทษที่แสนเจ็บปวด และเฝ้ารอวันล้างแค้น โดยร่วมมือกับ จี หมอดูไพ่ทาโร่ลึกลับ ผู้เลอโฉมแต่เปี่ยมด้วยแผนซ้อนแผนสุดจะคาดเดา จากความโชคร้ายที่เธอประสบในสมัยวัยรุ่น ทำให้ชีวิตของจีปลี่ยนไป!',
            'genres' => 'แอคชั่น',
            'duration' => '115 นาที',
            'director' => 'ชู เผิง หยาง',
            'cast' => 'เฌอมาลย์ บุญยศักดิ์, ธเนศ วรากุลนุเคราะห์, อนันดา เอเวอร์ริ่งแฮม, จิรายุ ตันตระกูล, กฤษดา สุโกศล แคลปป์',
            'trailer' => 'https://www.youtube.com/watch?v=jSGi96-yTCs',
            'reviews' => null
        ],
        [
            'movie_id' => 8,
            'title' => 'ก๊วนสาวซ่าส์ วีนซะไม่มี',
            'poster' => 'https://lh3.googleusercontent.com/9nWpd2PGXbKk9bJvCCexPVX6j5-IgRSTAFV5v0vvse-v8KTGCnk5XaEM7vmRY0Z82NuIr1XYa2XqsGq7waEOa_5bFOn0uJ6f=w260',
            'synopsis' => 'เรื่องราวของนักเรียนใหม่เคดี้ เฮรอน (แองกรี ไรซ์) ได้รับการต้อนรับสู่กลุ่มนักเรียนเด็กสาวที่อยู่ในจุดสูงสุดของห่วงโซ่อาหารทางสังคม  โดยกลุ่มเด็กสาวยอดนิยมที่เรียกว่า "เดอะ พลาสติคส์" ซึ่งคุมโดยตัวมัมตัวแม่จอมเจ้าเล่ห์ เรจิน่า จอร์จ (เรเน่ แรปป์) และลูกทีมของเธอ เกร็ทเชน (บีบี วูด) ) และคาเรน (อวันติกา) อย่างไรก็ตาม เมื่อเคดี้ทำพลาดครั้งใหญ่ในการตกหลุมรักแอรอน ซามูเอลส์ (คริสโตเฟอร์ บรินีย์) แฟนเก่าของเรจิน่า เธอก็พบว่าตัวเองตกเป็นเหยื่อในเป้าเล็งของเรจิน่า ขณะที่เคดี้เตรียมจะโค่นนักล่ายอดฝีมือของกลุ่มด้วยความช่วยเหลือจากเพื่อนของเธอ เจนิส (ออลิ’อี คราวัลโย่) และเดเมียน (จาเควล สปิวีย์) เธอต้องเรียนรู้วิธีที่จะซื่อสัตย์กับตัวเอง  ท่ามกลางการแข่งขันสุดโหดในโรงเรียน',
            'genres' => 'คอมเมดี้',
            'duration' => '115 นาที',
            'director' => 'Samantha Jayne, Arturo Perez Jr.',
            'cast' => 'Angourie Rice, Renee Rapp, Auli i Cravalho',
            'trailer' => 'https://www.youtube.com/watch?v=rqOxXtJNLlw',
            'reviews' => null
        ],
        [
            'movie_id' => 9,
            'title' => 'ดูน ภาคสอง',
            'poster' => 'https://lh3.googleusercontent.com/At7-P67j4DaB3OmtnAKyh4CPu3x-GuDonJ80Z3ypCfrWEZEwzO9-nBWf-f8F3KINrHVrBLmUltEXjmgY2RLbLoCFNDRNb7XdXw=w260',
            'synopsis' => '“Dune: Part Two” จะพาคุณไปสำรวจการเดินทางอันยิ่งใหญ่ของ พอล อพอล อาทรีเดส ที่ได้กลับมาพบกับ ชานี และพวกเฟรเมน ขณะที่เขากำลังอยู่ในเส้นทางการล้างแค้นกับกบฏที่ทำลายครอบครัวของเขา เขาต้องเลือกระหว่างคนรักและโชคชะตาของจักรวาล ทั้งยังต้องพยายามยับยั้งไม่ให้เกิดอนาคตอันเลวร้ายที่มีแต่เขาเท่านั้นที่ล่วงรู้',
            'genres' => 'แอคชั่น,ผจญภัย,ดราม่า',
            'duration' => '165 นาที',
            'director' => 'Denis Villeneuve',
            'cast' => 'Rebecca Ferguson, Timothee Chalamet, Zendaya',
            'trailer' => 'https://www.youtube.com/watch?v=seoUcT_QZdc',
            'reviews' => null
        ],
        [
            'movie_id' => 10,
            'title' => 'กังฟูแพนด้า 4',
            'poster' => 'https://lh3.googleusercontent.com/5U3o9cOloz01BbVZgqd9EnX6YR49SkMv22EROs8h9JvR6YQ2UMHuaV9odebRk1Hxs80cumWB80njRihnqLbMwG7dwjwCke5xYmE=w260',
            'synopsis' => 'เรื่องราวของ โป ที่เดินทางออกจากหมู่บ้านสันติไปยังเมืองใหญ่ ที่ซึ่งตัวตนอันชั่วร้ายที่คาดไม่ถึงกำลังเฝ้ารอเขาอยู่ มันก็คือวายร้ายคนใหม่ที่มีชื่อว่า เดอะ คาเมเลี่ยน นั่นเอง โดยคู่ปรับคนใหม่ของนักรบมังกร จะไม่ใช่คนที่เขาต่อสู้แบบเล่น ๆ อย่างแต่ก่อนได้อีกต่อไปแล้ว เพราะว่าความอันตรายของศัตรูคนนี้คือ ความสามารถที่จะเรียกเอาเหล่าศัตรูในอดีตของ โป กลับมาได้',
            'genres' => 'แอคชั่น,อนิเมชั่น,คอมเมดี้',
            'duration' => '95 นาที',
            'director' => 'Mike Mitchell',
            'cast' => 'Jack Black, Awkwafina',
            'trailer' => 'https://www.youtube.com/watch?v=ZXxzA0ZuW90',
            'reviews' => null
        ],
        [
            'movie_id' => 11,
            'title' => 'วองก้า',
            'poster' => 'https://lh3.googleusercontent.com/5dAWWUGxs0CFZbpb716HN6y3T95oeM3sIS0XEP1c7qju1f_SLQ6j626xHCqte---tyJOi7P_cDwu1wRA8uraOUUMMFt5bk0u=w260',
            'synopsis' => 'บอกเล่าเรื่องราวสุดแสนมหัศจรรย์ของนักมายากล นักประดิษฐ์ และนักลงทุนที่ยิ่งใหญ่ที่สุดในโลก กว่าที่เขาจะก้าวเข้ามาเป็น Willy Wonka เจ้าของโรงงานช็อกโกแลตอันสุดแสนวิเศษราวกับต้องมนตร์ที่ทำให้แฟน ๆ รักได้จวบจนทุกวันนี้ได้อย่างไร',
            'genres' => 'ผจญภัย,ครอบครัว,คอมเมดี้',
            'duration' => '115 นาที',
            'director' => 'Paul King',
            'cast' => 'Sally Hawkins, Timothee Chalamet, Rowan Atkinson',
            'trailer' => 'https://www.youtube.com/watch?v=Ciwgf92nhfQ',
            'reviews' => null
        ],
[
    'movie_id' => 12,
            'title' => 'อาร์ไกล์ ยอดสายลับ',
            'poster' => 'https://lh3.googleusercontent.com/1OA6KslfxKGuZrziY4uSQxBpijvBZNonbiG8JNwylYqMm41j4hk2ic5_L99MD6EpD9uk1dh2y08GfKLC4M1-TpZebAVlVIasEog=w260',
            'synopsis' => 'ไบรซ์ ดัลลัส โฮเวิร์ด (แฟรนไชส์ Jurassic World) รับบทเอลลี่ คอนเวย์ นักเขียนรักสันโดษเจ้าของผลงานซีรีส์นิยายจารกรรมขายดี ผู้ซึ่งความสุขของเธอคือค่ำคืนที่เธอได้อยู่บ้านกับคอมพิวเตอร์และอัลฟี่ แมวของเธอ แต่เมื่อเรื่องราวในหนังสือนิยายของเอลลี่ ซึ่งเล่าเรื่องของสายลับนาม อาร์ไกล์และภารกิจของเขาในการโค่นล้มเครือข่ายสายลับระดับโลก เริ่มไปตรงกับการเคลื่อนไหวลับๆ ขององค์กรสายลับจริงๆ เข้า ค่ำคืนของการได้อยู่บ้านอย่างเงียบสงบก็กลายเป็นเรื่องของอดีตไปเสียแล้ว

เอลลี่ (ผู้แบกอัลฟี่ไปไหนมาไหนด้วยในเป้สะพายหลังของเธอ) ร่วมด้วยเอเดน ที่รับบทโดยนักแสดงเจ้าของรางวัลออสการ์ แซม ร็อคเวล (Three Billboards Outside Ebbing, Missouri) สายลับผู้แพ้แมว ต้องเร่งรุดเดินทางข้ามโลกเพื่อหลบหนีจากพวกฆาตกรขณะที่เส้นแบ่งระหว่างโลกในนิยายของเอลลี่และโลกจริงๆ ของเธอเริ่มเลือนรางไป',
            'genres' => 'แอคชั่น,ผจญภัย,ระทึกขวัญ',
            'duration' => '140 นาที',
            'director' => 'Matthew Vaughn',
            'cast' => 'Bryce Dallas Howard, Samuel L. Jackson, Henry Cavill',
            'trailer' => 'https://www.youtube.com/watch?v=8FRMgX9Z3Kg',
            'reviews' => null
        ],
        [
            'movie_id' => 13,
            'title' => 'มาดามเว็บ',
            'poster' => 'https://lh3.googleusercontent.com/Vy2614FkOeHh-peRRD587NGsItlGrXUPy5vCs0YNaOF-JXr56KuvAaKEX32l5myfj9xop1UhlbAmOlm_td_bWqADn5Ejonv8XFg=w260',
            'synopsis' => 'แคสแซนดรา เว็บ เจ้าหน้าที่ทางการแพทย์หน่วยฉุกเฉินในแมนฮัตตัน หลังจากที่ผ่านเหตุการณ์เกือบจะตายมาแล้ว เธอก็ค้นพบว่าตัวเองมีพลังญาณทิพย์อันชวนพิศวง ที่สามารถทำให้มองเห็นมิติแห่งอนาคตอันใกล้ได้ และนั่้นดึงดูดทำให้เธอเข้าไปพัวพันกับหญิงสาว 3 คนที่ถูกกำหนดเอาไว้ให้ผนึกพลังด้วยกัน เว้นแต่พวกเธอจะต้องหาทางเอาชีวิตรอดจากอันตรายที่กำลังต่อกรอยู่กับวายร้ายที่มีพลังคล้ายกัน',
            'genres' => 'แอคชั่น,ผจญภัย,ไซไฟ',
            'duration' => '115 นาที',
            'director' => 'S.J. Clarkson',
            'cast' => 'Dakota Johnson, Tahar Rahim, Sydney Sweeney',
            'trailer' => 'https://www.youtube.com/watch?v=nKR_2gZJJro',
            'reviews' => null
        ],
[
    'movie_id' => 14,
            'title' => 'โมบิลสูท กันดั้ม ซี้ด ฟรีด้อม',
            'poster' => 'https://lh3.googleusercontent.com/4puG69f6vmuXPOndWDWQtHN3UxVNQ9MTeuTavuzRpZqjvUxRB2bMDkbg7xr9IW0enwFQY_TJfGR7nYKHCR89wXnGDnSQmsvCsTw=w260',
            'synopsis' => 'ในปี ส.ศ. 75 การสู้รบยังคงดำเนินต่อไป ภายใต้การต่อสู้เพื่อเอกราช และการรุกรานของ Blue Cosmos... เพื่อรักษาความสงบ จึงมีการจัดตั้งหน่วยงานติดตามสันติภาพระดับโลกในชื่อ COMPASS โดยมี Lacus เป็นประธานคนแรก ในฐานะสมาชิกของ COMPASS คิระและพรรคพวกของเขาได้เข้าแทรกแซงในการต่อสู้ระดับภูมิภาคต่างๆ จากนั้นไม่นานประเทศจัดตั้งขึ้นใหม่ที่มีชื่อว่า Foundation ได้เสนอปฏิบัติการร่วมกันเพื่อต่อต้านฐานที่มั่นของ Blue Cosmos',
            'genres' => 'แอคชั่น,อนิเมชั่น,ไซไฟ',
            'duration' => '125 นาที',
            'director' => 'Mitsuo Fukuda',
            'cast' => 'Soichiro Hoshi, Rie Tanaka, Akira Ishida',
            'trailer' => 'https://www.youtube.com/watch?v=qTkfFgmNKrk',
            'reviews' => null
        ],
        [
            'movie_id' => 15,
            'title' => 'ยินดีต้อนรับสู่โรงกลั่นโคมาดะ',
            'poster' => 'https://lh3.googleusercontent.com/R1aJAZPsYovWhFp_RmR989m95GK-KQq2JxGT8dFGh0kF7Y0OFWaJqnzcXtwWkLcBNryLvELlFAbLV2AzE8Z3UgLYPXQnozEH2w=w260',
            'synopsis' => 'โคทาโร่ บรรณาธิการออนไลน์หน้าใหม่ ต้องเดินทางไปเยี่ยมชม โรงกลั่นวิสกี้โคมาดะ เพื่อหาข้อมูลสำหรับโปรเจกต์วิสกี้ญี่ปุ่น เขาได้พบกับ รุย หญิงสาวผู้สืบทอดโรงกลั่นโคมาดะ ผู้กำลังพยายามอย่างหนักในการกลั่น โคมะ วิสกี้สูตรพิเศษของโรงกลั่นโคมาดะ ซึ่งมีการหยุดผลิตไปด้วยเหตุผลบาง โคทาโร่ และรุย ต้องช่วยกันตามหาสูตรลับของโคมะวิสกี้กลับมาอีกครั้ง จากความทรงจำอันเลือนลางของทุกคนในโรงกลั่น เพื่อนำวิสกี้ที่เต็มไปด้วยความทรงจำของครอบครัวกลับมาอีกครั้ง',
            'genres' => 'อนิเมชั่น,ดราม่า',
            'duration' => '90 นาที',
            'director' => 'Masayuki Yoshihara',
            'cast' => 'Saori Hayami, Kensho Ono, Maaya Uchida',
            'trailer' => 'https://www.youtube.com/watch?v=kBFrUegXHdk',
            'reviews' => null
        ],
        [
            'movie_id' => 16,
            'title' => 'ผีสิงผี',
            'poster' => 'https://lh3.googleusercontent.com/wRdxbYgQEyNCeri1IttO6usM6UK7ot5vSmuSRuaL14qvHYBgwM93P_Z4CG0WB1ZfWaofgbtyxim8es88yBwblL_Bmrl7ai52EQ=w260',
            'synopsis' => 'ความสยองครั้งใหม่กำลังคืบคลานเข้ามา จะเป็นอย่างไรถ้าต้องปลุกคนตายมาสิงร่างผี “Baghead ผีสิงผี” ภาพยนตร์สยองขวัญน่าจับตาเล่าเรื่องราวของ “ไอริส” (เฟรยา อัลลัน) หญิงสาวที่ต้องรับมรดกตกทอดจากพ่อของเธอเป็นผับเก่าๆ แห่งหนึ่ง แต่หารู้ไม่ว่าชั้นใต้ดินของที่แห่งนี้มีสิ่งมีชีวิตลึกลับจากบรรพกาลถูกกักขังอยู่ “แบ็กเฮด” อสุรกายที่สามารถเปลี่ยนรูปร่างของมันเป็นใครก็ได้จากโลกคนตาย ความสามารถนี้ทำให้คนที่พบเจอกับมันสามารถคุยกับคนที่ตายไปแล้วได้ ไอริสเริ่มใช้มันในทางที่ผิดจนเหตุการณ์สุดหลอนค่อยๆ เกินการควบคุมกลายเป็นความสยดสยองที่เธอไม่อาจรับมือได้',
            'genres' => 'สยองขวัญ',
            'duration' => '95 นาที',
            'director' => 'Alberto Corredor',
            'cast' => 'Freya Allan, Jeremy Irvine, Ned Dennehy',
            'trailer' => 'https://www.youtube.com/watch?v=8vc2TLWGu0c',
            'reviews' => null
        ],
    ];

    foreach ($MovieData as $data) {
        Movie::create($data);
    }
}
}
