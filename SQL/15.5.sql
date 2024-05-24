--In ra thông tin tên sách, giá mua, giá bán, tên nhà xuất bản, tên thể loại của từng cuốn sách
select * from book
select * from publisher
select * from category
select * from orders
--1
select a.name,a.price,a.purchase_price,a.author,b.name as publisher_name,c.name as category_name
from book a
left join publisher b
on a.publisher_id=b.publisher_id
left join category c
on a.category_id=c.category_id
--2
----cachs 1
select * from
(select top 1 name, price
from book
order by price desc) as max_price
union all
select top 1 name, price
from book
order by price
---- cach 2
with temp(abcc) as (select max(price) from book union select min(price) from book)
select * from book where price in (select * from temp)
----cachs 3
select * 
from book 
where price in (
	select max(price) 
	from book 
	union 
	select min(price) 
	from book)
--3
select a.name as category_name, count(b.book_id) as so_luong_sach
from category a
left join book b
on a.category_id=b.category_id
group by a.name


--4
select a.name
from book a
where a.book_id not in 
(select distinct book_id from order_detail)
--5
select a.name
from book a
where a.book_id in 
(select distinct book_id from order_detail)
--6 Tìm hóa đơn mua ít nhất 2 loại sách khác nhau
select * from orders
select * from order_detail
select * from book
select * from publisher

select a.order_id 
from orders a
left join order_detail b
on a.order_id=b.order_id
group by a.order_id 
having count(distinct b.book_id)>1

select order_id
from order_detail
group by order_id
having count(distinct book_id)>1

--7 Tìm hóa đơn có mua tất cả các loại sách của nhà xuất bản Hồng Đức
---- dung` full join
select a.order_id, count(a.order_id) as order_book_count, count(temp.book_id) publisher_book_count
from order_detail a
full join (
select b.*,c.name as publisher_name
from book b
left join publisher c
on b.publisher_id=c.publisher_id
where c.name=N'Đinh Tị Books (tư nhân)') temp
on a.book_id=temp.book_id
group by a.order_id
having count(a.order_id) = count(temp.book_id)

select a.order_id, temp.book_id, temp.name
from order_detail a
full join (
select b.*,c.name as publisher_name
from book b
left join publisher c
on b.publisher_id=c.publisher_id
where c.name=N'Đinh Tị Books (tư nhân)') temp
on a.book_id=temp.book_id

select *
from order_detail a
left join book b
on a.book_id=b.book_id
full join (select * from publisher c where c.name = N'Đinh Tị Books (tư nhân)') c
on b.publisher_id=c.publisher_id

----
-- dung` bien' ket hop inner join
declare @bookcounter int
set @bookcounter  =(select count(b.book_id)
from book b
left join publisher p
on b.publisher_id=p.publisher_id
where p.name=N'Đinh Tị Books (tư nhân)')
select od.order_id,count(od.book_id) count_book_on_od from order_detail od
inner join book b
on od.book_id=b.book_id
left join publisher p
on b.publisher_id=p.publisher_id
where p.name=N'Đinh Tị Books (tư nhân)'
group by od.order_id
having count(od.book_id)=@bookcounter
select @bookcounter

----cach cua thay
select * from orders o where 
(not exists (select * from book b where b.publisher_id=11)
and
not exists (
	select * from order_detail od where od.order_id=o.order_id
	and od.book_id=b.book_id)

	select * from order_detail
-- Lấy ra danh sách các order đã mua sách Con Sẽ Thành Công
select distinct order_id 
from order_detail od
left join book b
on od.book_id = b.book_id
where b.name=N'Con Sẽ Thành Công'

-- Tìm order có giá trị đơn hàng lớn nhất
select *
from orders 
where order_total = (select max(order_total) from orders)
---
select top 1 * from orders order by order_total desc
----
declare @max_order float
set @max_order=(select max(order_total) from orders)
select * from orders where order_total=@max_order

-- Tìm các sách bán được trong năm 2023

select distinct name from book b
left join order_detail od
on b.book_id=od.book_id
left join orders o
on od.order_id=o.order_id
where year(order_date)=2023

-- Tính số lượng sách đã bán được của nhà xuất bản Đinh Tị Books (tư nhân)
select p.name,sum(od.amount) sold_amount
from publisher p
left join book b
on p.publisher_id=b.publisher_id
left join order_detail od
on b.book_id=od.book_id
where p.name=N'Đinh Tị Books (tư nhân)'
group by p.name

-- Lấy ra đơn hàng mới nhất của từng khách hàng. (khó)

select top 1 * from orders
group by customer_id


insert into orders
(order_date,customer_id,saler_id,order_total) values 
('2021-07-01',3,2,1000000)
select * from orders
;
-- c1, dùng chính xác nếu định dạng ngày đặt là date time
with last_date as (
select o.customer_id,max(o.order_date) as date
from orders o
group by o.customer_id)

select o.* from orders o
right join last_date
on o.customer_id=last_date.customer_id 
and o.order_date=last_date.date;
--c2
with tmp as(select *,
	ROW_NUMBER() 
over (
	partition by customer_id order by order_date desc) stt_don
	from orders o)
select * from tmp where stt_don=1

---cach cua tuan anh
select o.* from orders o
where o.order_date = (select max(order_date) from orders where customer_id=o.customer_id)

select max(b.order_date)
from orders a
join orders b 
on a.customer_id=b.customer_id
group by a.customer_id

select order_id from order_detail where book_id=3
select * from orders
create index idx_book_name on book(name)
select * from book where name =N'Phương Pháp Đọc Sáng Tạo Của Người Do Thái' order by name
--alter table order_detail
--add constraint fk_book_order_detail
--foreign key (book_id) references book(book_id)

--Tìm hóa đơn có mua 3 sách do NXB Giáo Dục xuất bản (3 sách khác nhau).
select order_id,count(distinct od.book_id) count_book
from order_detail od
inner join book b
on od.book_id=b.book_id
inner join publisher p
on b.publisher_id=p.publisher_id
where p.name=N'NXB Giáo Dục'
group by order_id
having count(distinct od.book_id)=3

-- Tìm sách có tổng số lượng bán ra thấp nhất trong năm 2023
with cte as (select b.name,isnull(sum(od.amount),0) sold_amount
from book b
left join order_detail od
on b.book_id=od.book_id
left join (select * from orders where year(orders.order_date)=2023) o 
on od.order_id=o.order_id
group by b.name)
select * from cte
where sold_amount=(select min(sold_amount) from cte)

-- Tính tổng số lượng sách bán trong năm 2023
select sum(amount)
from order_detail od, orders o
where od.order_id=o.order_id and year(o.order_date)=2023
----
select sum(amount)
from order_detail od
join orders o
on od.order_id=o.order_id
where year(o.order_date)=2023

-- In ra danh sách các sách của NXB Đinh Tị Books không bán được trong năm 2023.

select b.name,isnull(sum(od.amount),0)
from book b
join publisher p
on b.publisher_id=p.publisher_id
left join (select od.*,o.order_date from order_detail od
join orders o
on od.order_id=o.order_id
where year(o.order_date)=2023) od
on b.book_id=od.book_id
where p.name=N'Đinh Tị Books (tư nhân)' 
group by b.name
having isnull(sum(od.amount),0)=0
----
select b.*,p.name
from book b, publisher p
where b.publisher_id=p.publisher_id
and p.name=N'Đinh Tị Books (tư nhân)' 
and book_id not in (
	select book_id 
	from order_detail od,orders o 
	where od.order_id=o.order_id 
	and year(o.order_date)=2023)
--Trị giá trung bình của tất cả các hóa đơn được bán ra trong năm 2023 là bao nhiêu
select AVG(order_total)
from orders
where year(order_date)=2023
select * from orders
--In ra danh sách các sách có giá bán bằng 1 trong 3 mức giá cao nhất
select * 
from book b
where b.price in (select top 3 price from book order by price desc)
--Với từng NXB, tìm giá bán cao nhất, thấp nhất, trung bình của các sản phẩm.
select p.publisher_id,p.name,max(b.price) as max_price, min(b.price) min_price, AVG(b.price) avg_price
from publisher p
left join book b
on p.publisher_id=b.publisher_id
group by p.name,p.publisher_id;
----
with a as(select p.publisher_id,max(b.price) as max_price, min(b.price) min_price, AVG(b.price) avg_price
from publisher p, book b
where p.publisher_id=b.publisher_id
group by p.publisher_id)
select p.name,a.max_price,a.min_price,a.avg_price
from publisher p
left join a
on p.publisher_id=a.publisher_id

-- Tìm các sách có giá trị nằm trong khoảng 200.000 - 500.000
select * from book where price between 200000 and 500000
-- Lấy thông tin khách hàng mua đơn hàng ít tiền nhất
select * 
from customer c, orders o
where c.customer_id=o.customer_id
and order_total= (select min(order_total) from orders)
-- tìm thông tin saler bán đơn hàng cao tiền nhất
select saler.*
from orders
left join saler
on orders.saler_id=saler.saler_id
where order_total=(select max(order_total) from orders)
-- Tìm thông tin puslisher có nhiều đầu sách nhất (xuất bản được nhiều cuốn sách nhất)
with cte as (select p.*,count(b.book_id) booknumber
from publisher p, book b
where p.publisher_id=b.publisher_id
group by p.publisher_id,p.name)
select * from cte where booknumber=(select max(booknumber) from cte)
----




