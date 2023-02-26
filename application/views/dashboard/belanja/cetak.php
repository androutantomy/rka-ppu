<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="User" />
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style2 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style2 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style3 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style3 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style4 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style4 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style5 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style5 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style14 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style14 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style18 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style18 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style24 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style27 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style27 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style28 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style30 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style33 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style33 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style35 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style35 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style36 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style36 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style37 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style37 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style38 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style38 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style39 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style39 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style40 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      th.style40 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:#FFFFFF }
      td.style41 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style41 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style42 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style42 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style43 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style43 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style44 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style44 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style45 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style45 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style46 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      th.style46 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:#FFFFFF }
      td.style47 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      td.style48 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      th.style48 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      td.style49 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      th.style49 { vertical-align:middle; text-align:center; border-bottom:2px solid #000000 !important; border-top:2px solid #000000 !important; border-left:none #000000; border-right:2px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:12pt; background-color:white }
      td.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style50 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style51 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style52 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style52 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style53 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style53 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style54 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style54 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style55 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style56 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style57 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style57 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style58 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style59 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style60 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style61 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style61 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style62 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style63 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style64 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style64 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style65 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style65 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style66 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style66 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style67 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style68 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style69 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style70 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style70 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style71 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style71 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style72 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style72 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style73 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style73 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style74 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style75 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style76 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      th.style76 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:11pt; background-color:white }
      td.style77 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style77 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style78 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style78 { vertical-align:top; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style79 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style79 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style80 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style81 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style81 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style82 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style82 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style83 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style83 { vertical-align:top; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style84 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style85 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style85 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style86 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style86 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style87 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style87 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style88 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style88 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style89 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      th.style89 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; color:#000000; font-family:'Times New Roman'; font-size:10pt; background-color:white }
      td.style90 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style90 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style91 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style91 { vertical-align:middle; text-align:left; padding-left:9px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style92 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style93 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style93 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style94 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style94 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style95 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style95 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style96 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style96 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style97 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style97 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style98 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style98 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style99 { vertical-align:top; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style99 { vertical-align:top; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style100 { vertical-align:top; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style100 { vertical-align:top; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style101 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style101 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style102 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style102 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style103 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style104 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style105 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style105 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style106 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style106 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style107 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style107 { vertical-align:top; text-align:left; padding-left:63px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style108 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style108 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style109 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style109 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style110 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      th.style110 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt; background-color:white }
      td.style111 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      th.style111 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:9pt; background-color:white }
      td.style112 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style112 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style113 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style113 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      td.style114 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      th.style114 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:10pt; background-color:white }
      table.sheet0 col.col0 { width:159.95555372pt }
      table.sheet0 col.col1 { width:16.26666648pt }
      table.sheet0 col.col2 { width:111.15555428pt }
      table.sheet0 col.col3 { width:50.15555498pt }
      table.sheet0 col.col4 { width:46.76666613pt }
      table.sheet0 col.col5 { width:46.76666613pt }
      table.sheet0 col.col6 { width:35.24444404pt }
      table.sheet0 col.col7 { width:100.31110996pt }
      table.sheet0 col.col8 { width:43.37777728pt }
      table.sheet0 col.col9 { width:42pt }
      table.sheet0 col.col10 { width:42pt }
      table.sheet0 col.col11 { width:42pt }
      table.sheet0 col.col12 { width:105.73333212pt }
      table.sheet0 col.col13 { width:71.16666585pt }
      table.sheet0 tr { height:13.636363636364pt }
      table.sheet0 tr.row0 { height:33.25pt }
      table.sheet0 tr.row1 { height:32pt }
      table.sheet0 tr.row2 { height:22pt }
      table.sheet0 tr.row3 { height:22pt }
      table.sheet0 tr.row4 { height:22pt }
      table.sheet0 tr.row5 { height:22pt }
      table.sheet0 tr.row6 { height:22pt }
      table.sheet0 tr.row7 { height:22pt }
      table.sheet0 tr.row8 { height:22pt }
      table.sheet0 tr.row9 { height:22pt }
      table.sheet0 tr.row10 { height:24.65pt }
      table.sheet0 tr.row11 { height:19pt }
      table.sheet0 tr.row12 { height:17.9pt }
      table.sheet0 tr.row13 { height:26.5pt }
      table.sheet0 tr.row14 { height:17.9pt }
      table.sheet0 tr.row15 { height:17.9pt }
      table.sheet0 tr.row16 { height:17.9pt }
      table.sheet0 tr.row17 { height:17.9pt }
      table.sheet0 tr.row18 { height:17.9pt }
      table.sheet0 tr.row19 { height:17.9pt }
      table.sheet0 tr.row20 { height:28.75pt }
      table.sheet0 tr.row21 { height:44pt }
      table.sheet0 tr.row22 { height:17.9pt }
      table.sheet0 tr.row23 { height:17.9pt }
      table.sheet0 tr.row24 { height:17.9pt }
      table.sheet0 tr.row25 { height:39.65pt }
      table.sheet0 tr.row26 { height:42.5pt }
      table.sheet0 tr.row27 { height:31.5pt }
      table.sheet0 tr.row28 { height:16.5pt }
      table.sheet0 tr.row29 { height:16pt }
      table.sheet0 tr.row30 { height:16pt }
      table.sheet0 tr.row31 { height:12.75pt }
      table.sheet0 tr.row35 { height:16pt }
	  .padding-1{
        padding-left:20px !important;padding-bottom:5px !important;
      }
      .align-items-center {
        -webkit-box-align: center !important;
        -webkit-align-items: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
     }
     .justify-content-center {
        -webkit-box-pack: center !important;
        -webkit-justify-content: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .d-flex {
        display: -webkit-box !important;
        display: -webkit-flex !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .navbar-brand {
        padding-top: var(--bs-navbar-brand-padding-y);
        padding-bottom: var(--bs-navbar-brand-padding-y);
        margin-right: var(--bs-navbar-brand-margin-end);
        font-size: var(--bs-navbar-brand-font-size);
        color: var(--bs-navbar-brand-color);
        white-space: nowrap;
    }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.1in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
</style>
    <a class="navbar-brand d-flex align-items-center mb-3 justify-content-center text-primary" style="margin-top:-60px;padding-bottom:30px !important;">
        <div class="logo-normal style47 s style49">
            <img src="<?php echo base_url() ?>assets/images/logo.png" style="width:85px !important;">
        </div>
        <h2 class="logo-title ms-3 mb-0" data-setting="app_name" style="margin-left:10px !important;"> YAYASAN UNIVERSITAS 17 AGUSTUS 1945 SAMARINDA</h2>
	</a>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <tbody>
		
          <tr class="row0">
            <td class="column0 style47 s style49" colspan="14">RINCIAN BELANJA SUB KEGIATAN UNIT KERJA</td>
          </tr>
          <tr class="row1">
            <td class="column0 style47 s style49" colspan="14">TAHUN ANGGARAN 2023</td>
          </tr>
          <tr class="row2">
            <td class="column0 style28 s" style="padding-top:20px;padding-left:20px;padding-bottom:10px;">Unit Organisasi</td>
            <td class="column1 style29 s" style="padding-top:20px;padding-left:20px;padding-bottom:10px;">:</td>
            <td class="column2 style30 s style31" colspan="12" style="padding-top:20px;padding-left:20px;padding-bottom:10px;"><?php echo $this->config->item('yayasan_name'); ?></td>
          </tr>
          <tr class="row3">
            <td class="column0 style28 s padding-1">Sub Unit Organisasi</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s style31 padding-1" colspan="12"><?php echo $this->session->userdata('nama_user') ?></td>
          </tr>
          <tr class="row4">
            <td class="column0 style28 s padding-1">Kegiatan</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s padding-1 style31" colspan="12">Nama Kegiatan</td>
          </tr>
          <tr class="row5">
            <td class="column0 style28 s padding-1">Sub Kegiatan</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s padding-1 style31" colspan="12">Nama Sub Kegiatan</td>
          </tr>
          <tr class="row6">
            <td class="column0 style28 s padding-1">Sumber Pendanaan</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s padding-1 style31" colspan="12"><?php echo $this->config->item('pendapatan_yayasan_name'); ?></td>
          </tr>
          <tr class="row7">
            <td class="column0 style28 s padding-1">Lokasi Kegiatan</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s padding-1 style31" colspan="12"><?php echo $this->config->item('alamat_yayasan'); ?></td>
          </tr>
          <tr class="row8">
            <td class="column0 style28 s padding-1">Waktu Pelaksanaan</td>
            <td class="column1 style29 s padding-1">:</td>
            <td class="column2 style30 s padding-1 style31" colspan="12">Januari s.d. Desember</td>
          </tr>
          <tr class="row9">
            <td class="column0 style28 s" style="padding-bottom:20px !important;;padding-left:20px !important;">Jumlah 2023</td>
            <td class="column1 style29 s" style="padding-bottom:20px !important;;padding-left:20px !important;">:</td>
            <td class="column2 style30 s style31" colspan="12" style="padding-bottom:20px !important;;padding-left:20px !important;">Total Rincian</td>
          </tr>
          <tr class="row10">
            <td class="column0 style47 s style49" colspan="14">Rincian Belanja Sub Kegiatan</td>
          </tr>
          <tr class="row11">
            <td class="column0 style61 s style59" rowspan="3">Kode Rekening</td>
            <td class="column1 style62 s style60" colspan="2" rowspan="3">Uraian</td>
            <td class="column3 style59 s style59" colspan="5">Sebelum Perubahan</td>
            <td class="column8 style59 s style59" colspan="5">Setelah Perubahan</td>
            <td class="column13 style55 s style56" rowspan="3">Bertambah / Berkurang</td>
          </tr>
          <tr class="row12">
            <td class="column3 style105 s style107" colspan="4">Rincian Perhitungan</td>
            <td class="column7 style60 s style60" rowspan="2">Jumlah</td>
            <td class="column8 style105 s style107" colspan="4">Rincian Perhitungan</td>
            <td class="column12 style60 s style60" rowspan="2">Jumlah</td>
          </tr>
          <tr class="row13">
            <td class="column3 style102 s">Koefisien</td>
            <td class="column4 style103 s">Satuan</td>
            <td class="column5 style108 s">Harga</td>
            <td class="column6 style111 s">PPN</td>
            <td class="column8 style102 s">Koefisien</td>
            <td class="column9 style103 s">Satuan</td>
            <td class="column10 style103 s">Harga</td>
            <td class="column11 style104 s">PPN</td>
          </tr>
          <tr class="row14">
            <td class="column0 style21 n"><a class="comment-indicator"></a><div class="comment">User:<br />
menyesuaikan akun</div>
5</td>
            <td class="column1 style64 s style110" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">BELANJA DAERAH</span></td>
            <td class="column7 style109 s">Rp. 12.840.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style101 s">Rp. 13.840.000</td>
            <td class="column13 style19 n">Rp1,000,000</td>
          </tr>
          <tr class="row15">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">BELANJA OPERASI</span></td>
            <td class="column7 style14 s">Rp. 12.840.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 12.840.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row16">
            <td class="column0 style13 n">5.1.02</td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Barang dan Jasa</span></td>
            <td class="column7 style14 s">Rp. 12.840.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 12.840.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row17">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.01</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Barang</span></td>
            <td class="column7 style14 s">Rp. 240.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 240.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row18">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.01.01</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Barang Pakai Habis</span></td>
            <td class="column7 style14 s">Rp. 240.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 240.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row19">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.01.01.0052</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Makanan dan Minuman Rapat</span></td>
            <td class="column7 style14 s">Rp. 240.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 240.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row20">
            <td class="column0 style6 null"></td>
            <td class="column1 style68 s style69" colspan="6">[-] Makan dan minum pengolahan retribusi</td>
            <td class="column7 style6 null"></td>
            <td class="column8 style57 null style58" colspan="4"></td>
            <td class="column12 style23 null"></td>
            <td class="column13 style18 null"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style6 null"></td>
            <td class="column1 style70 s style71" colspan="2"><a class="comment-indicator"></a><div class="comment">rincian usulan<br />
</div>
<span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Biaya Konsumsi Rapat Biasa (Kudapan/Snack) Spesifikasi : KALIMANTAN TIMUR</span></td>
            <td class="column3 style10 s"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">10 Kotak</span></td>
            <td class="column4 style10 s"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Orang/Kali</span></td>
            <td class="column5 style7 n">24,000</td>
            <td class="column6 style11 n">0</td>
            <td class="column7 style15 s">Rp. 240.000</td>
            <td class="column8 style20 s">11 Kotak</td>
            <td class="column9 style10 s"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Orang/Kali</span></td>
            <td class="column10 style7 n">24,000</td>
            <td class="column11 style26 n">0</td>
            <td class="column12 style24 s">Rp. 264.000</td>
            <td class="column13 style19 n">Rp24,000</td>
          </tr>
          <tr class="row22">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.04</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Perjalanan Dinas</span></td>
            <td class="column7 style14 s">Rp. 12.600.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 12.600.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row23">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.04.01</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Perjalanan Dinas Dalam Negeri</span></td>
            <td class="column7 style14 s">Rp. 12.600.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 12.600.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row24">
            <td class="column0 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">5.1.02.04.01.0001</span></td>
            <td class="column1 style64 s style65" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">Belanja Perjalanan Dinas Biasa</span></td>
            <td class="column7 style14 s">Rp. 12.600.000</td>
            <td class="column8 style50 null style51" colspan="4"></td>
            <td class="column12 style22 s">Rp. 12.600.000</td>
            <td class="column13 style27 n">0</td>
          </tr>
          <tr class="row25">
            <td class="column0 style6 null"></td>
            <td class="column1 style66 s style67" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt">[-]</span><span style="font-weight:bold; color:#000000; font-family:'Segoe UI'; font-size:8pt"> kolom keterangan</span></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style52 null style53" colspan="4"></td>
            <td class="column12 style23 null"></td>
            <td class="column13 style18 null"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style1 null"></td>
            <td class="column1 style70 s style75" colspan="2"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Biaya Perjalanan Dinas Biasa (Dalam Daerah) Spesifikasi : Belanja Perjalanan Dinas Biasa (Dalam Daerah) (3 hari)</span></td>
            <td class="column3 style16 s">3 Orang/Perjalanan</td>
            <td class="column4 style17 s"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Orang / Perjalanan</span></td>
            <td class="column5 style7 n">4,200,000</td>
            <td class="column6 style11 n">0</td>
            <td class="column7 style15 s">Rp. 12.600.000</td>
            <td class="column8 style16 s">3 Orang/Perjalanan</td>
            <td class="column9 style17 s"><span style="color:#000000; font-family:'Segoe UI'; font-size:8pt">Orang / Perjalanan</span></td>
            <td class="column10 style7 n">4,200,000</td>
            <td class="column11 style26 n">0</td>
            <td class="column12 style25 s">Rp. 12.600.000</td>
            <td class="column13 style18 null"></td>
          </tr>
          <tr class="row27">
            <td class="column0 style72 s style74" colspan="7">Grand Total :</td>
            <td class="column7 style114 s">Rp. 12.840.000</td>
            <td class="column8 style54 s style54" colspan="4">Grand Total :</td>
            <td class="column12 style112 s">Rp. 12.840.000</td>
            <td class="column13 style113 n">Rp1,024,000</td>
          </tr>
          <tr class="row28">
            <td class="column0 style32 null style34" colspan="8"></td>
            <td class="column8 style33 null style76" colspan="6"></td>
          </tr>
          <tr class="row29">
            <td class="column0 style35 null style37" colspan="8"></td>
            <td class="column8 style39 s style40" colspan="6">Samarinda, 26 Februari 2023</td>
          </tr>
          <tr class="row30">
            <td class="column0 style38 s style40" colspan="8">Pembina Universitas 17 Agustus 1945 Samarinda</td>
            <td class="column8 style39 s style40" colspan="6">Ketua Yayasan Universitas 17 Agustus 1945 Samarinda</td>
          </tr>
          <tr class="row31">
            <td class="column0 style41 null style43" colspan="8"></td>
            <td class="column8 style42 null style43" colspan="6"></td>
          </tr>
          <tr class="row32">
            <td class="column0 style41 null style43" colspan="8"></td>
            <td class="column8 style42 null style43" colspan="6"></td>
          </tr>
          <tr class="row33">
            <td class="column0 style41 null style43" colspan="8"></td>
            <td class="column8 style42 null style43" colspan="6"></td>
          </tr>
          <tr class="row34">
            <td class="column0 style41 null style43" colspan="8"></td>
            <td class="column8 style42 null style43" colspan="6"></td>
          </tr>
          <tr class="row35">
            <td class="column0 style38 s style40" colspan="8">Hj. Prof. Dr. Awang Faroek Ishak, M.M</td>
            <td class="column8 style39 s style40" colspan="6">Hj. Dayang Donna Walfiaries Tania, S.Psi, M.M</td>
          </tr>
          <tr class="row36">
            <td class="column0 style44 null style46" colspan="8"></td>
            <td class="column8 style44 null style46" colspan="6"></td>
          </tr>
        </tbody>
    </table>
    <script>
		window.print();
	</script>
  </body>
</html>
