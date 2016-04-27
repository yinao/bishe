select
t1.id as order_id,t1.order_num,t1.order_time,t1.create_time,
t2.id as user_id,t2.user_phone,
t4.id as vero_id,t4.vero_num,
t5.id as station_id,t5.station_num
from bishe_record as t1,bishe_user as t2,bishe_inoculator as t3,bishe_vero as t4,bishe_station t5
where t1.is_deleted=0 and t1.user_id=t3.id and t3.userId=t2.id and t1.vero_id=t4.id and t1.station_id=t5.id
