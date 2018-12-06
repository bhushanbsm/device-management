# device-management
This project maintains list of equipments installed onsite.
# You can assume that we have multiple IoT devices which we install / setup onsite and we
want to maintain the lists of all these devices per site
# structure
- organization : this will contain name of the organization
- sites : this will contain site details like address, city, district, state, pin_code
- device types : this will have a device type i.e ( controller, acctuator, gateway )
- users : this will have users details
- roles : this will have roles ( superadmin, admin, implementor )
# Above application feature following
(1) Authentication + implementation of cookie ( Remember me )  
(2) Role based access control  
(3) We should be able to export csv and pdf version of the list of devices installed on a perticular
site  
(4) We should be able to search by a perticular device type and should be able to get the list of
sites it was installed on with dates search from to search to dates with csv and pdf export
feature  
(5) We should be able to search by an implementor role and should get the list of sites with
search from to search to dates with csv and pdf export feature   
(6) Password forgot / reset feature  
