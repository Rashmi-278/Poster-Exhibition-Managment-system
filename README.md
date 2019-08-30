# Poster-Exhibition-Managment-system
A scenerio where an organisation conducts exhibition to promote socail awareness through posters is been implemented.
In this a group ( Main designer and two co-designers ) of graphic designers register for the exhibit and then the posters registered will 
be viewed and judged by all the members of the judge panel , if the poster is accepted by all the memebers of judge panel then 
that particular poster will be displayed in the exhibit.

*Register
- Upload image - get poster ID
- Enter details of Main designer and Codesigner
- Submit- get REgisteration ID
- A log is created upon new registeration

*Viewsession
-Static page to display the venue , title and time of the exhibit
- uses stored procedure to display judge information

*Results
- Enter Registeration ID and Poster ID 
- If authenticated - display (reviewed | accepted | rejected )

*Judge
- Enter the username and password provided by the organisation
- If Authenticated -Allow to provide decision (Accept | Reject ) the registered posters and also provide remarks
- Logout

*Edit
- Enter Registeration ID and Poster ID 
- If authenticated - aLLOw to edit the poster uploaded
- a log is created when the participant edits the poster 

*Posters
- ALL the posters which will be displayed in the exhibit are shown in this page

*About
- Displays guidelines for registeration and exhibit

*Help
- Displays FAQS with answers

Credits : templated.co for the web template
*Contact US
- Displays contact information
