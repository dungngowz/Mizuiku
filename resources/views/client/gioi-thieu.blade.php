@extends('layouts.client.default')
@section('url-form', '{{ route(introduction) }}')
@section('params-form')
    <div>
        <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTEyNDMzMTExNQ9kFgQCAQ9kFgpmD2QWAmYPFgIeBFRleHQFCEFib3V0IHVzZAIDDxYCHwAF3gENCjxsaW5rIHJlbD0nY2Fub25pY2FsJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9naW9pLXRoaWV1Lmh0bScgLz4NCjxtZXRhIG5hbWU9ImtleXdvcmRzIiBjb250ZW50PSJtaXp1aWt1IC0gZW0gecOqdSBuxrDhu5tjIHPhuqFjaCIgLz4NCjxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJtaXp1aWt1IC0gZW0gecOqdSBuxrDhu5tjIHPhuqFjaCIgLz5kAgQPFgIfAAWuAg0KPG1ldGEgcHJvcGVydHk9Im9nOnRpdGxlIiBjb250ZW50PSJBYm91dCB1cyIgLz4NCjxtZXRhIHByb3BlcnR5PSJvZzp0eXBlIiBjb250ZW50PSJhcnRpY2xlIiAvPg0KPG1ldGEgcHJvcGVydHk9Im9nOnVybCIgY29udGVudD0iaHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vZ2lvaS10aGlldS5odG0iIC8+DQo8bWV0YSBwcm9wZXJ0eT0ib2c6aW1hZ2UiIGNvbnRlbnQ9IiIgLz4NCjxtZXRhIHByb3BlcnR5PSJvZzpkZXNjcmlwdGlvbiIgY29udGVudD0ibWl6dWlrdSAtIGVtIHnDqnUgbsaw4bubYyBz4bqhY2giIC8+ZAIFDxYCHwAFngENCjxsaW5rIHJlbD0iU2hvcnRjdXQgaWNvbiIgaHJlZj0iaHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vcGljL1N5c3RlbVdlYnNpdGUvaWNvbmJ0bmhvYzYzNjMxOTkyMDE0NzYyMjc3NDYzNjU1OTIyNTYwNTU5NTAxOC5wbmciIHR5cGU9ImltYWdlL3gtaWNvbiIvPmQCBg8WAh8ABTI8c3R5bGU+DQojZm9vdHtwYWRkaW5nLXRvcDowICFpbXBvcnRhbnR9DQo8L3N0eWxlPmQCAxAWAh4GYWN0aW9uBQ8vZ2lvaS10aGlldS5odG1kFgICAQ9kFgpmD2QWDAIBD2QWAmYPFgIfAAWpAjxhIGNsYXNzPSdzbG9nYW4gZG5tb2JpbGUnICB0aXRsZT0nJyBocmVmPScvJz48aW1nIGFsdD0iIiBzcmM9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbWl6dWlrdV9uXzYzNjY4NzMzNzY0ODMzMzE5Mi5wbmciIC8+PC9hPjxhIGNsYXNzPSdzbG9nYW4gZG4gZGJNb2JpbGUnICB0aXRsZT0nJyBocmVmPScvJz48aW1nIGFsdD0iIiBzcmM9Imh0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbG9nb3Jlc3BvXzYzNjMzMjA1NjQ2MjA4MzE0MC5wbmciIC8+PC9hPmQCAw9kFgICAQ8WAh8ABdsIDQo8ZGl2IGNsYXNzPSdpdGVtJz4NCiAgICA8YSBocmVmPSdodHRwOi8vaG9pc2luaHZpZW4uY29tLnZuLycgdGFyZ2V0PSdfYmxhbmsnIHRpdGxlPSdTdHVkZW50IFVuaW9uIG9mIFZpZXRuYW0nPg0KICAgICAgICA8aW1nIGFsdD0nU3R1ZGVudCBVbmlvbiBvZiBWaWV0bmFtJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvaHNfNjM2NTM4XzYzNjU2MDE4MTc3MTA3NDU1NS5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz5TdHVkZW50IFVuaW9uIG9mIFZpZXRuYW08L3A+DQo8L2Rpdj4NCg0KPGRpdiBjbGFzcz0naXRlbSc+DQogICAgPGEgaHJlZj0naHR0cDovL3d3dy50aGlldW5oaXZpZXRuYW0udm4vJyB0YXJnZXQ9J19ibGFuaycgdGl0bGU9J1lvdW5nIFBpb25lZXIgT3JnJz4NCiAgICAgICAgPGltZyBhbHQ9J1lvdW5nIFBpb25lZXIgT3JnJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvaGRfNjM2NTM4XzYzNjU2MDE4MTgzNzI4ODM0My5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz5Zb3VuZyBQaW9uZWVyIE9yZzwvcD4NCjwvZGl2Pg0KDQo8ZGl2IGNsYXNzPSdpdGVtJz4NCiAgICA8YSBocmVmPSdodHRwczovL3d3dy5zdW50b3J5LmNvbS8nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nJz4NCiAgICAgICAgPGltZyBhbHQ9Jycgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL18tMDEtRm9yLV82MzY1ODM0NTc4MjczNDIzNzcucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+PC9wPg0KPC9kaXY+DQoNCjxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgIDxhIGhyZWY9J2h0dHBzOi8vc3VudG9yeXBlcHNpY28udm4vZW4nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nJz4NCiAgICAgICAgPGltZyBhbHQ9Jycgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2xvZ29maW5hbF82MzY1OTA2MTc0ODE3MjM1MjQucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+PC9wPg0KPC9kaXY+DQpkAgUPFgIfAAXWAjxkaXYgY2xhc3M9J2hvY25nYXknPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2UtbGVhcm5pbmcuaHRtJyAgY2xhc3M9J2J0bmhvY25nYXknIHRpdGxlPSdMZWFybiBub3cnPkxlYXJuIG5vdzwvYT48dWwgY2xhc3M9J3N1YmxvZ2lueCBzdWJsb2dpbjInPjxsaT48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9lLWxlYXJuaW5nLmh0bScgdGl0bGU9J0UtbGVhcm5pbmcnPkUtbGVhcm5pbmc8L2E+PC9saT48bGk+PGEgaHJlZj0nL3Rob25nLWtlLmh0bScgdGl0bGU9J1Ro4buRbmcga8OqJz5UaOG7kW5nIGvDqjwvYT48L2xpPiA8L3VsPjwvZGl2PmQCBw8WAh8ABcgBDQo8YSBocmVmPSdqYXZhc2NyaXB0Oi8vJyB0aXRsZT0nUmVnaXN0ZXInIGNsYXNzPSdidG5kayBzbGlkZV9vcGVuIGZzMTInPlJlZ2lzdGVyPC9hPg0KPHNwYW4gY2xhc3M9J2JvcmRlcic+PC9zcGFuPg0KPGEgaHJlZj0namF2YXNjcmlwdDovLycgdGl0bGU9J0xvZ2luJyBjbGFzcz0nYnRuZGsgbG9naW5Gb3JtX29wZW4gZnMxMic+TG9naW48L2E+DQpkAgkPZBYCZg8WAh8ABeUBPHVsIGNsYXNzPSdDb21tb25MYW5ndWFnZSc+DQogICAgPGxpPjxhIGhyZWY9J2phdmFzY3JpcHQ6OycgY2xhc3M9J2xhbmdjaGknIG9uY2xpY2s9J1NldExhbmdEaXNwbGF5KDEpJz5UaeG6v25nIFZp4buHdDwvYT48L2xpPg0KDQogICAgPGxpPjxhIGhyZWY9J2phdmFzY3JpcHQ6OycgY2xhc3M9J2xhbmdjaGknIG9uY2xpY2s9J1NldExhbmdEaXNwbGF5KDIpJz5FbmdsaXNoPC9hPjwvbGk+DQo8L3VsPmQCCw9kFgRmDxYCHwAFvA88dWwgaWQ9J0NvbW1vbk1lbnVNYWluJyBjbGFzcz0nbWFpbic+PGxpIGRhdGE9JzEnIGNsYXNzPSdsaXRvcCAnPjxhIGhyZWY9Jy8nICB0aXRsZT0nSG9tZSAnPkhvbWUgPC9hPjwvbGk+PGxpIGRhdGE9JzInIGNsYXNzPSdsaXRvcCBoYXNzdWInPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2dpb2ktdGhpZXUuaHRtJyAgdGl0bGU9J0Fib3V0IHVzJz5BYm91dCB1czwvYT48dWw+DQo8bGk+DQogICAgPGEgdGl0bGU9JyJNaXp1aWt1IC0gSSBsb3ZlIGNsZWFuIHdhdGVyIiBwcm9ncmFtIGludHJvZHVjdGlvbicgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbWl6dWlrdS1pLWxvdmUtY2xlYW4td2F0ZXItcHJvZ3JhbS1pbnRyb2R1Y3Rpb24uaHRtJyA+Ik1penVpa3UgLSBJIGxvdmUgY2xlYW4gd2F0ZXIiIHByb2dyYW0gaW50cm9kdWN0aW9uPC9hPg0KPC9saT4NCjxsaT4NCiAgICA8YSB0aXRsZT0nQ28tb3JnYW5pemluZyBCb2FyZCAnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2NvLW9yZ2FuaXppbmctYm9hcmQuaHRtJyA+Q28tb3JnYW5pemluZyBCb2FyZCA8L2E+DQo8L2xpPjwvdWw+PC9saT48bGkgZGF0YT0nMycgY2xhc3M9J2xpdG9wIGhhc3N1Yic+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vdGluLXR1Yy5odG0nICB0aXRsZT0nTmV3cyc+TmV3czwvYT48dWw+DQo8bGk+DQogICAgPGEgdGl0bGU9J1Byb2dyYW0gbmV3cycgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vcHJvZ3JhbS1uZXdzLmh0bScgPlByb2dyYW0gbmV3czwvYT4NCjwvbGk+DQo8bGk+DQogICAgPGEgdGl0bGU9J0Vudmlyb25tZW50YWwgbmV3cyAnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2Vudmlyb25tZW50YWwtbmV3cy5odG0nID5FbnZpcm9ubWVudGFsIG5ld3MgPC9hPg0KPC9saT48L3VsPjwvbGk+PGxpIGRhdGE9JzQnIGNsYXNzPSdsaXRvcCBoYXNzdWInPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3RodS12aWVuLmh0bScgIHRpdGxlPSdHYWxsZXJ5Jz5HYWxsZXJ5PC9hPjx1bD4NCjxsaT4NCiAgICA8YSB0aXRsZT0nQWxidW0gJyBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9hbGJ1bS5odG0nID5BbGJ1bSA8L2E+DQo8L2xpPg0KPGxpPg0KICAgIDxhIHRpdGxlPSdWaWRlb3MnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3ZpZGVvcy1lbi5odG0nID5WaWRlb3M8L2E+DQo8L2xpPjwvdWw+PC9saT48bGkgZGF0YT0nNScgY2xhc3M9J2xpdG9wIGhhc3N1Yic+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbGljaC10cmluaC5odG0nICB0aXRsZT0nUHJvZ3JhbSB0aW1lbGluZSc+UHJvZ3JhbSB0aW1lbGluZTwvYT48dWw+DQo8bGk+DQogICAgPGEgdGl0bGU9J1Byb2dyYW0gdGltZWxpbmUnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3Byb2dyYW0tdGltZWxpbmUuaHRtJyA+UHJvZ3JhbSB0aW1lbGluZTwvYT4NCjwvbGk+PC91bD48L2xpPjxsaSBkYXRhPSc2JyBjbGFzcz0nbGl0b3AgaGFzc3ViJz48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9raG9hLWhvYy5odG0nICB0aXRsZT0nRS1sZWFybmluZyc+RS1sZWFybmluZzwvYT48dWw+DQo8bGk+DQogICAgPGEgdGl0bGU9J0UtbGVhcm5pbmcnIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2UtbGVhcm5pbmcuaHRtJyA+RS1sZWFybmluZzwvYT4NCjwvbGk+PC91bD48L2xpPjxsaSBkYXRhPSc3JyBjbGFzcz0nbGl0b3AgJz48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9saWVuLWhlLmh0bScgIHRpdGxlPSdDb250YWN0IFVzJz5Db250YWN0IFVzPC9hPjwvbGk+PC91bD5kAgEPFgIfAAWlATxhIHRhcmdldD0nX2JsYW5rJyBocmVmPSdodHRwczovL3d3dy5mYWNlYm9vay5jb20vbWl6dWlrdWVteWV1bnVvY3NhY2gvJyB0aXRsZT0nZmFucGFnZSBmYWNlYm9vayc+PHNwYW4+Rm9sbG93IHVzPC9zcGFuPjxpbWcgYWx0PSdmYicgc3JjPScvY3NzL0NvbW1vbi9mYi5wbmcnIC8+PC9hPmQCAg9kFgJmDxYCHwAFaDxsaT48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9naW9pLXRoaWV1Lmh0bScgdGl0bGU9J0ludHJvZHVjdGlvbic+SW50cm9kdWN0aW9uPC9hPjwvbGk+ZAIED2QWAmYPZBYCZg9kFgJmD2QWBAIBDxYCHwAFqggNCjxkaXYgY2xhc3M9J21haW4nPg0KICAgIDxkaXYgY2xhc3M9J3dycCc+DQogICAgICAgIDxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0ndGlldWRlJz4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9taXp1aWt1LWktbG92ZS1jbGVhbi13YXRlci1wcm9ncmFtLmh0bScgdGl0bGU9JyJNaXp1aWt1IC0gSSBsb3ZlIGNsZWFuIHdhdGVyIiBwcm9ncmFtICcgY2xhc3M9J25hbWUnPiJNaXp1aWt1IC0gSSBsb3ZlIGNsZWFuIHdhdGVyIiBwcm9ncmFtIDwvYT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0nY29udCBkb3Rkb3Rkb3QnPuKAnE1penVpa3XigJ0gaXMgYW4gaW5pdGlhdGl2ZSBieSBTdW50b3J5IEhvbGRpbmdzIExpbWl0ZWQgKFN1bnRvcnkpIHRoYXQgd2FzIGVzdGFibGlzaGVkIGFuZCBpbXBsZW1lbnRlZCBpbiBKYXBhbiBzaW5jZSAyMDA0LiBUaGUgYWltIG9mIHRoZSBpbml0aWF0aXZlIGlzIHRvIGVkdWNhdGUgYW5kIHNwcmVhZCBhd2FyZW5lc3Mgb24gdGhlIGltcG9ydGFuY2Ugb2Ygd2F0ZXIgY29uc2VydmF0aW9uIGFuZCBwcmVzZXJ2YXRpb24gYW1vbmcgcHJpbWFyeSBzY2hvb2wgc3R1ZGVudHMuIFNpbmNlIHRoZW4sIHRoZSBwcm9ncmFtIGhhcyBjYXB0aXZhdGVkIHRoZSBwYXJ0aWNpcGF0aW9uIG9mIG92ZXIgMTQ1LDAwMCBwcmltYXJ5IHNjaG9vbCBjaGlsZHJlbiBhbmQgcGFyZW50cywgcmVjZWl2aW5nIGhpZ2ggcHJhaXNlIGZyb20gdGhlIEphcGFuZXNlIGNvbW11bml0eSBhbmQgc29jaWV0eS48L2Rpdj4NCiAgICAgICAgICAgIDxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL21penVpa3UtaS1sb3ZlLWNsZWFuLXdhdGVyLXByb2dyYW0uaHRtJyB0aXRsZT0nRGV0YWlscycgY2xhc3M9J3hjdCc+RGV0YWlsczwvYT4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9J2NiJz48L2Rpdj4NCiAgICAgICAgPC9kaXY+DQogICAgICAgIDxkaXYgY2xhc3M9J2NiJz48L2Rpdj4NCiAgICA8L2Rpdj4NCjwvZGl2Pg0KZAIDD2QWAmYPFgIfAAWMDjxkaXYgY2xhc3M9J2NvbnRlbnQnPjxkaXYgY2xhc3M9J3ZnTmFtZSc+Q28tb3JnYW5pemluZyBib2FyZDwvZGl2PjxkaXYgY2xhc3M9J2dyb3VwSXRlbSc+DQo8ZGl2IGNsYXNzPSdpdGVtJz4NCiAgICA8YSBocmVmPSdodHRwOi8vaG9pc2luaHZpZW4uY29tLnZuLycgdGFyZ2V0PSdfYmxhbmsnIHRpdGxlPSdTdHVkZW50IFVuaW9uIG9mIFZpZXRuYW0nPg0KICAgICAgICA8aW1nIGFsdD0nU3R1ZGVudCBVbmlvbiBvZiBWaWV0bmFtJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvaHNfNjM2NTM4XzYzNjU2MDE4MTc3MTA3NDU1NS5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz5TdHVkZW50IFVuaW9uIG9mIFZpZXRuYW08L3A+DQo8L2Rpdj4NCg0KPGRpdiBjbGFzcz0naXRlbSc+DQogICAgPGEgaHJlZj0naHR0cDovL3d3dy50aGlldW5oaXZpZXRuYW0udm4vJyB0YXJnZXQ9J19ibGFuaycgdGl0bGU9J1lvdW5nIFBpb25lZXIgT3JnJz4NCiAgICAgICAgPGltZyBhbHQ9J1lvdW5nIFBpb25lZXIgT3JnJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvaGRfNjM2NTM4XzYzNjU2MDE4MTgzNzI4ODM0My5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz5Zb3VuZyBQaW9uZWVyIE9yZzwvcD4NCjwvZGl2Pg0KDQo8ZGl2IGNsYXNzPSdpdGVtJz4NCiAgICA8YSBocmVmPSdodHRwczovL3d3dy5zdW50b3J5LmNvbS8nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nJz4NCiAgICAgICAgPGltZyBhbHQ9Jycgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL18tMDEtRm9yLV82MzY1ODM0NTc4MjczNDIzNzcucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+PC9wPg0KPC9kaXY+DQoNCjxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgIDxhIGhyZWY9J2h0dHBzOi8vc3VudG9yeXBlcHNpY28udm4vZW4nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nJz4NCiAgICAgICAgPGltZyBhbHQ9Jycgc3JjPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2xvZ29maW5hbF82MzY1OTA2MTc0ODE3MjM1MjQucG5nJyAvPg0KICAgIDwvYT4NCiAgICA8cCBjbGFzcz0ndGl0bGUgZnMxMSc+PC9wPg0KPC9kaXY+DQo8L2Rpdj48L2Rpdj48ZGl2IGNsYXNzPSdjb250ZW50Jz48ZGl2IGNsYXNzPSd2Z05hbWUnPkVkdWNhdGlvbmFsIHBhcnRuZXJzPC9kaXY+PGRpdiBjbGFzcz0nZ3JvdXBJdGVtJz4NCjxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgIDxhIGhyZWY9J2phdmFzY3JpcHQ6Ly8nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nICc+DQogICAgICAgIDxpbWcgYWx0PScgJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbGdfNjM2MzE5XzYzNjMzMjA1NjI3NTk4MjQ5NS5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz4gPC9wPg0KPC9kaXY+DQoNCjxkaXYgY2xhc3M9J2l0ZW0nPg0KICAgIDxhIGhyZWY9J2h0dHA6Ly93d3cubGl2ZWxlYXJuLm9yZy8nIHRhcmdldD0nX2JsYW5rJyB0aXRsZT0nICc+DQogICAgICAgIDxpbWcgYWx0PScgJyBzcmM9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3BpYy9iYW5uZXIvbGdfNjM2MzE5XzYzNjMzMjA1NjMxNjI2NDc5OS5wbmcnIC8+DQogICAgPC9hPg0KICAgIDxwIGNsYXNzPSd0aXRsZSBmczExJz4gPC9wPg0KPC9kaXY+DQo8L2Rpdj48L2Rpdj5kAgcPZBYGZg9kFgJmDxYCHwAFqQI8YSBjbGFzcz0nc2xvZ2FuIGRubW9iaWxlJyAgdGl0bGU9JycgaHJlZj0nLyc+PGltZyBhbHQ9IiIgc3JjPSJodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL21penVpa3Vfbl82MzY2ODczMzc2NDgzMzMxOTIucG5nIiAvPjwvYT48YSBjbGFzcz0nc2xvZ2FuIGRuIGRiTW9iaWxlJyAgdGl0bGU9JycgaHJlZj0nLyc+PGltZyBhbHQ9IiIgc3JjPSJodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9waWMvYmFubmVyL2xvZ29yZXNwb182MzYzMzIwNTY0NjIwODMxNDAucG5nIiAvPjwvYT5kAgEPFgIfAAXhGQ0KICAgIA0KPHVsIGlkPSdDb21tb25NZW51Rm9vdGVyJyBjbGFzcz0nbWFpbic+PGxpPjxhIGhyZWY9Jy8nICB0aXRsZT0nSG9tZSAnPkhvbWUgPC9hPjwvbGk+PGxpPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2dpb2ktdGhpZXUuaHRtJyAgdGl0bGU9J0Fib3V0IHVzJz5BYm91dCB1czwvYT48L2xpPjxsaT48YSBocmVmPSdodHRwczovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi90aW4tdHVjLmh0bScgIHRpdGxlPSdOZXdzJz5OZXdzPC9hPjwvbGk+PGxpPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL3RodS12aWVuLmh0bScgIHRpdGxlPSdHYWxsZXJ5Jz5HYWxsZXJ5PC9hPjwvbGk+PGxpPjxhIGhyZWY9J2h0dHBzOi8vbWl6dWlrdS1lbXlldW51b2NzYWNoLnZuL2xpY2gtdHJpbmguaHRtJyAgdGl0bGU9J1Byb2dyYW0gdGltZWxpbmUnPlByb2dyYW0gdGltZWxpbmU8L2E+PC9saT48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4va2hvYS1ob2MuaHRtJyAgdGl0bGU9J0UtbGVhcm5pbmcnPkUtbGVhcm5pbmc8L2E+PC9saT48bGk+PGEgaHJlZj0naHR0cHM6Ly9taXp1aWt1LWVteWV1bnVvY3NhY2gudm4vbGllbi1oZS5odG0nICB0aXRsZT0nQ29udGFjdCBVcyc+Q29udGFjdCBVczwvYT48L2xpPjwvdWw+DQo8ZGl2Pg0KCTxzcGFuIHN0eWxlPSJiYWNrZ3JvdW5kLWltYWdlOmluaXRpYWw7YmFja2dyb3VuZC1wb3NpdGlvbjppbml0aWFsO2JhY2tncm91bmQtc2l6ZTppbml0aWFsO2JhY2tncm91bmQtcmVwZWF0OmluaXRpYWw7YmFja2dyb3VuZC1hdHRhY2htZW50OmluaXRpYWw7YmFja2dyb3VuZC1vcmlnaW46aW5pdGlhbDtiYWNrZ3JvdW5kLWNsaXA6aW5pdGlhbDsiPlBlcm1pdCBOby4gPHN0cm9uZz4zMC9HUC1TVFRUVDwvc3Ryb25nPjxiciAvPg0KCShHcmFudGVkIGJ5IERlcGFydG1lbnQgb2YgSW5mb3JtYXRpb24gYW5kIENvbW11bmljYXRpb25zIG9mIEhvIENoaSBNaW5oIGNpdHksIDIzTWFyMjAxOCk8L3NwYW4+PGJyIC8+DQoJU3VudG9yeSBQZXBzaUNvIFZpZXRuYW0gQmV2ZXJhZ2U8L2Rpdj4NCjxkaXY+DQoJQWRkcmVzczogNXRoIEZsb29yLCBTaGVyYXRvbiBIb3RlbCwgODggRG9uZyBLaG9pIFN0cmVldCwgRGlzdHJpY3QgMSwgSG8gQ2hpIE1pbmggQ2l0eSwgVmlldG5hbS48L2Rpdj4NCjxkaXY+DQoJVGVsOiAoODQgMjgpIDMgODIxIDk0MzcmbmJzcDs8L2Rpdj4NCjxkaXY+DQoJV2Vic2l0ZTogd3d3Lm1penVpa3UtZW15ZXVudW9jc2FjaC52bjxiciAvPg0KCSZuYnNwOzwvZGl2Pg0KDQogICAgPGRpdiBjbGFzcz0ndGFsIGNtTmF2X2Z0Jz4NCiAgICAgICAgPGEgdGFyZ2V0PSdfYmxhbmsnIGhyZWY9J2h0dHBzOi8vd3d3LmZhY2Vib29rLmNvbS9taXp1aWt1ZW15ZXVudW9jc2FjaC8nIHRpdGxlPSdmYW5wYWdlIGZhY2Vib29rJz48c3Bhbj5Gb2xsb3cgdXM8L3NwYW4+PGltZyBhbHQ9J2ZiJyBzcmM9Jy9jc3MvQ29tbW9uL2ZiLnBuZycgLz48L2E+DQogICAgICAgIDxkaXYgY2xhc3M9J2NiJz48L2Rpdj4NCiAgICA8L2Rpdj4gDQo8L2Rpdj4gICANCjxkaXYgY2xhc3M9J3JpZ2h0Jz4gDQogICAgPGRpdj4gDQogICAgICAgIDxkaXYgY2xhc3M9J2xpZW5rZXQnPjxzcGFuIGNsYXNzPSdjMDA1Mjg2IGZPZmZpY2luYVNhbklUQ01lZGl1bSc+V2Vic2l0ZSBMaW5rIDwvc3Bhbj48c2VsZWN0IG9uY2hhbmdlPSduYXZpZ2F0aW9uKHRoaXMudmFsdWUpOyc+PG9wdGlvbiB2YWx1ZT0nJz5MaW5rPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL2hvaXNpbmh2aWVuLmNvbS52bi8nPlN0dWRlbnQgVW5pb24gb2YgVmlldG5hbTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J2h0dHA6Ly93d3cudGhpZXVuaGl2aWV0bmFtLnZuLyc+Q2VudHJhbCBDb3VuY2lsIGZvciBIbyBDaGkgTWluaCBZb3VuZyBQaW9uZWVyIE9yZ2FuaXphdGlvbjwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J2h0dHA6Ly93d3cuc3VudG9yeS5jb20nPlN1bnRvcnkgSG9sZGluZ3MgTGltaXRlZCA8L29wdGlvbj48b3B0aW9uIHZhbHVlPSdodHRwOi8vd3d3LnN1bnRvcnkuY29tL2Nzci9hY3Rpdml0eS9lbnZpcm9ubWVudC9lY28vZWR1Y2F0aW9uLyc+IE1penVpa3UgUHJvZ3JhbSBpbiBKYXBhbjwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J2h0dHA6Ly93d3cuc3VudG9yeXBlcHNpY28udm4vJz5TdW50b3J5IFBlcHNpQ28gVmlldG5hbSBCZXZlcmFnZTwvb3B0aW9uPjxvcHRpb24gdmFsdWU9J2h0dHA6Ly93d3cubGl2ZWxlYXJuLm9yZy8nPkNlbnRlciBvZiBMaXZlICYgTGVhcm4gZm9yIEVudmlyb25tZW50IGFuZCBDb21tdW5pdHkgPC9vcHRpb24+PG9wdGlvbiB2YWx1ZT0naHR0cDovL3R1b25nbGFpY2VudHJlLm9yZy8nPlR1b25nIExhaSBDZW50cmUgZm9yIEhlYWx0aCBFZHVjYXRpb24gYW5kIENvbW11bml0eSBEZXZlbG9wbWVudCAgPC9vcHRpb24+PC9zZWxlY3Q+PC9kaXY+DQogICAgICAgIDxkaXYgY2xhc3M9J2NiJz48L2Rpdj4NCiAgICA8L2Rpdj4NCiAgICA8cCBjbGFzcz0ndGFyIGxoMjQgZnMxNic+wqkgMjAxNyBBbGwgUmlnaHRzIFJlc2VydmVkPC9wPg0KICAgIDxwIGNsYXNzPSd0YXIgbGgyNCBmczE2Jz5TdW50b3J5IFBlcHNpQ28gVmlldG5hbSBCZXZlcmFnZSBDb21wYW55IExpbWl0ZWQ8L3A+DQogICAgPHAgY2xhc3M9J3RhciBsaDI0IGZzMTYnPkFsbCBjb250ZW50IG9uIHRoaXMgc2l0ZSBpcyBzb2xlbHkgdGhlIHByb3BlcnR5IG9mPC9wPg0KICAgIDxwIGNsYXNzPSd0YXIgbGgyNCBmczE2Jz4iTWl6dWlrdS1JIGxvdmUgY2xlYW4gd2F0ZXIiIHByb2dyYW0gaW4gVmlldG5hbTwvcD4NCiAgICA8cCBjbGFzcz0ndGFyIGxoMjQgZnMxNic+QWxsIHJpZ2h0cyByZXNlcnZlZDwvcD4NCiAgICA8dWwgaWQ9J0NvbW1vbk1lbnVCb3R0b20nIGNsYXNzPSdtYWluJz48bGk+PGEgaHJlZj0naHR0cDovL21penVpa3UtZW15ZXVudW9jc2FjaC52bi9kaWV1LWtob2FuLXN1LWR1bmcuaHRtJyAgdGl0bGU9J1Rlcm1zIG9mIFVzZSc+VGVybXMgb2YgVXNlPC9hPjwvbGk+PGxpPjxhIGhyZWY9Jy9jaGluaC1zYWNoLWJhby1tYXQuaHRtJyAgdGl0bGU9J1ByaXZhdGUgUG9saWN5Jz5Qcml2YXRlIFBvbGljeTwvYT48L2xpPjwvdWw+DQogICAgPGRpdiBjbGFzcz0nc29saWV1Jz4NCiAgICAgICAgPHNwYW4gY2xhc3M9J29ubGluZSc+T25saW5lOiAzPC9zcGFuPg0KICAgICAgICA8c3BhbiBjbGFzcz0ndG90YWwnPlRvdGFsIGFjY2VzczogMzAxPC9zcGFuPg0KICAgIDwvZGl2Pg0KICAgIDxkaXYgY2xhc3M9J2NiJz48L2Rpdj4NCmQCAg8WAh8AZWQCCQ9kFhpmDw9kFgIeC3BsYWNlaG9sZGVyBRRUw6puIMSRxINuZyBuaOG6rXAgKmQCAQ8PZBYCHwIFB0VtYWlsICpkAgIPD2QWAh8CBQ5N4bqtdCBraOG6qXUgKmQCAw8PZBYCHwIFD0jhu40gdsOgIHTDqm4gKmQCBA8QZA8WBGYCAQICAgMWBBAFDkdp4bubaSB0w61uaCAqBQEwZxAFA05hbQUBMWcQBQRO4buvBQEyZxAFBUtow6FjBQEzZ2RkAgUPD2QWAh8CBRRT4buRIMSRaeG7h24gdGhv4bqhaWQCBg8QZA8WA2YCAQICFgMQBQtC4bqhbiBsw6AgKgUBMGcQBWJHacOhbyB2acOqbiB0aeG7g3UgaOG7jWMgKG7hur91IGtow7RuZyBwaOG6o2kgbMOgIGdpw6FvIHZpw6puIHRp4buDdSBo4buNYyB2dWkgbMOybmcgY2jhu41uIEtow6FjKQUBMWcQBQVLaMOhYwUBM2dkZAIHDxBkDxYBZhYBEAUcQ2jhu41uIFThu4luaC9UaMOgbmggcGjhu5EgKgUBMGdkZAIIDxBkDxYBZhYBEAUhQ2jhu41uIFF14bqtbi9IdXnhu4duL1Ro4buLIHjDoyAqBQEwZ2RkAgkPD2QWAh8CBRFOxqFpIGPDtG5nIHTDoWMgKmQCCg8PZBYCHwIFFFTDqm4gxJHEg25nIG5o4bqtcCAqZAILDw9kFgIfAgUOTeG6rXQga2jhuql1ICpkAgwPD2QWAh8CBRpOaOG6rXAgZW1haWwgY+G7p2EgYuG6oW4gKmRkHdz2ZGZQv3dRLOFIpGrNSlDAAdo=" />
    </div>

    <div>

        <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="CA0B0334" />
        <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdABSxsv1zMpZUgSEmxnKS5aCnxSmaAS04ClqMGm0TNSe71PY6NPEhGxyqUfbrtU5fmn2Ea1JmMp/omb6DBYyqB8t4aJWaBGhcdI015b/mBhG3Gx7EMk7ShbbqtY6TGZoa9ziTJ6S6DYjhZubzEtbOrs4EqRjlsWi91vMr8+iawXpLpulctB5UNZMCEqnVpCZUOhsJbzoBqJlLSqTOV+ByHgA8fCUMftueCVzFLlj7PVAFccWHLKmKn1d9PSHqKgkLpF6HjsBalzX8GRHC3hP00WRujLfdiHdgjx59E5EVWfsewFL1TWIyRwEAx82L0V5V3dLr5cUzuLeFE8JcO/xGFc9Xki7u87Rh3NAa0R0R7xsQcJRbMjWeiBsYX78aMpRgLxDyDNJGUOxSowwhsySzxlSpkr18Jgt91XABMyxg49or3Ax0hLc5HbdfqDeYbstnEBf4UYtQ" />
    </div>
@endsection
@section('content')
    <div id="pageroad">
        <div class="wrp">
            <ul>
            <li><a href="{{ config('app.url') }}" title="{{ __('client.home') }}">{{ __('client.home') }}</a></li>
                <li><a href='{{ route('introduction') }}' title='{{ __('client.introduction') }}'>{{ __('client.introduction') }}</a></li>
            </ul>
            <div class="cb"></div>
        </div>
    </div>

    <div id="headAbout"></div>
    <div id="about" class="cate list">

        <div class='main'>
            <div class='wrp'>
                <div class='item'>
                    <div class='tieude'>
                        <a href='{{ url($intro[0]['slug']) }}' title='"Mizuiku - I love clean water" program ' class='name'>{{ $intro[0]['title'] }}</a>
                    </div>
                    <div class='cont dotdotdot'>{{ $intro[0]['description'] }}</div>
                    <a href='{{ route('detail-introduction') }}' title='Details' class='xct'>{{ __('client.details') }}</a>
                    <div class='cb'></div>
                </div>
                <div class='cb'></div>
            </div>
        </div>

        <div class="parent">
            <div class="wrp">
                <div class="tieude"><a class="name">{{ __('client.partner')}}</a></div>
                <div class='content'>
                    <div class='vgName'>{{ __('client.co-partner')}}</div>
                    <div class='groupItem'>
                        <div class='item'>
                            <a href='http://hoisinhvien.com.vn/' target='_blank' title='Student Union of Vietnam'>
                                <img alt='Student Union of Vietnam' src='https://mizuiku-emyeunuocsach.vn/pic/banner/hs_636538_636560181771074555.png' />
                            </a>
                            <p class='title fs11'>{{ __('client.title-icon-student')}}</p>
                        </div>

                        <div class='item'>
                            <a href='http://www.thieunhivietnam.vn/' target='_blank' title='Young Pioneer Org'>
                                <img alt='Young Pioneer Org' src='https://mizuiku-emyeunuocsach.vn/pic/banner/hd_636538_636560181837288343.png' />
                            </a>
                            <p class='title fs11'>{{ __('client.title-icon-young')}}</p>
                        </div>

                        <div class='item'>
                            <a href='https://www.suntory.com/' target='_blank' title=''>
                                <img alt='' src='https://mizuiku-emyeunuocsach.vn/pic/banner/_-01-For-_636583457827342377.png' />
                            </a>
                            <p class='title fs11'></p>
                        </div>

                        <div class='item'>
                            <a href='https://suntorypepsico.vn/en' target='_blank' title=''>
                                <img alt='' src='https://mizuiku-emyeunuocsach.vn/pic/banner/logofinal_636590617481723524.png' />
                            </a>
                            <p class='title fs11'></p>
                        </div>
                    </div>
                </div>
                <div class='content'>
                    <div class='vgName'>{{ __('client.edu-partner')}}</div>
                    <div class='groupItem'>
                        <div class='item'>
                            <a href='javascript://' target='_blank' title=' '>
                                <img alt=' ' src='https://mizuiku-emyeunuocsach.vn/pic/banner/lg_636319_636332056275982495.png' />
                            </a>
                            <p class='title fs11'> </p>
                        </div>

                        <div class='item'>
                            <a href='http://www.livelearn.org/' target='_blank' title=' '>
                                <img alt=' ' src='https://mizuiku-emyeunuocsach.vn/pic/banner/lg_636319_636332056316264799.png' />
                            </a>
                            <p class='title fs11'> </p>
                        </div>
                    </div>
                </div>
                <div class="cb"></div>
            </div>
        </div>

    </div>

        
@endsection