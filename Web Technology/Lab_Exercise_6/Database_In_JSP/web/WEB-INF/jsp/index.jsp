<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ page import = "java.io.*,java.util.*,java.sql.*"%>
<%@ page import = "javax.servlet.http.*,javax.servlet.*" %>
<%@ taglib uri="http://java.sun.com/jsp/jstl/core" prefix = "c"%>
<%@ taglib uri="http://java.sun.com/jsp/jstl/sql" prefix = "sql"%>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Welcome to Videos Details database</title>
    </head>

    <body>
        <sql:setDataSource var = "snapshot" driver = "com.mysql.jdbc.Driver"
         url = "jdbc:mysql://localhost/mysql"
         user = "root"  password = "surendra"/>
 
      <sql:query dataSource = "${snapshot}" var = "result">
         SELECT * from Vdetails;
      </sql:query>
 
      <table border = "1" width = "100%">
         <tr>
            <th>Id</th>
            <th>FileName</th>
            <th>FileType</th>
            <th>Size</th>
            <th>Duration</th>
         </tr>
         
         <c:forEach var = "row" items = "${result.rows}">
            <tr>
               <td><c:out value = "${row.Id}"/></td>
               <td><c:out value = "${row.FileName}"/></td>
               <td><c:out value = "${row.FileType}"/></td>
               <td><c:out value = "${row.Size}"/></td>
               <td><c:out value = "${row.Duration}"/></td>
            </tr>
         </c:forEach>
      </table>
    </body>
</html>
