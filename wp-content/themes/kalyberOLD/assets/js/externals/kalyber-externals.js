"use strict";!function(e){var t,o,a;o="message",a=function(o){var t,a=e.location.protocol+"//"+e.location.hostname;console.log("GTM PARDOT FORM ABANDONED - origin: "+o.origin),console.log("GTM PARDOT FORM ABANDONED - full event >>>>>>>>>>>>"),console.log(o),o.data&&"https://go.kalyber.com"===o.origin&&o.data.postUrl===a&&o.data.eventType&&"pardotFormAbandoned"===o.data.eventType&&(console.log("GTM PARDOT FORM ABANDONED - message data: "+JSON.stringify(o.data)),console.log("GTM PARDOT FORM ABANDONED - data object >>>>>>>>>>>>"),console.log(o.data),t=o.data.fieldsCompleted.toString()+" - "+o.data.numberOfFieldsComplete,console.log("GTM PARDOT FORM ABANDONED - value pushed to GTM dataLayer: "+t),dataLayer.push({event:"formAbandoned",fields:t}))},(t=e).addEventListener?t.addEventListener(o,a):t.attachEvent?t.attachEvent("on"+o,function(o){a.call(t,o)}):void 0!==t["on"+o]&&null!==t["on"+o]||(t["on"+o]=function(o){a.call(t,o)})}(window),function(a){var t,o,e;o="message",e=function(o){var t=a.location.protocol+"//"+a.location.hostname;console.log("GTM PARDOT FORM COMPLETED - origin: "+o.origin),console.log(o),o.data&&"https://go.kalyber.com"===o.origin&&o.data.postUrl===t&&o.data.eventType&&"pardotFormCompleted"===o.data.eventType&&(console.log("GTM PARDOT FORM COMPLETED - message data: "+JSON.stringify(o.data)),console.log("GTM PARDOT FORM COMPLETED - data object >>>>>>>>>>>>"),console.log(o.data),dataLayer.push({event:"formCompleted",formType:o.data.formType}))},(t=a).addEventListener?t.addEventListener(o,e):t.attachEvent?t.attachEvent("on"+o,function(o){e.call(t,o)}):void 0!==t["on"+o]&&null!==t["on"+o]||(t["on"+o]=function(o){e.call(t,o)})}(window);
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImd0bS90YWdzL3BhcmRvdF9ldmVudC1kYXRhbGF5ZXItZm9ybWFiYW5kb25lZC5qcyIsImd0bS90YWdzL3BhcmRvdF9ldmVudC1kYXRhbGF5ZXItZm9ybWNvbXBsZXRlZC5qcyJdLCJuYW1lcyI6WyJ3aW5kb3ciLCJlbCIsImV2dCIsImZuIiwiZXZlbnQiLCJmaWVsZERhdGEiLCJzaXRlVXJsIiwibG9jYXRpb24iLCJwcm90b2NvbCIsImhvc3RuYW1lIiwiY29uc29sZSIsImxvZyIsIm9yaWdpbiIsImRhdGEiLCJwb3N0VXJsIiwiZXZlbnRUeXBlIiwiSlNPTiIsInN0cmluZ2lmeSIsImZpZWxkc0NvbXBsZXRlZCIsInRvU3RyaW5nIiwibnVtYmVyT2ZGaWVsZHNDb21wbGV0ZSIsImRhdGFMYXllciIsInB1c2giLCJmaWVsZHMiLCJhZGRFdmVudExpc3RlbmVyIiwiYXR0YWNoRXZlbnQiLCJjYWxsIiwiZm9ybVR5cGUiXSwibWFwcGluZ3MiOiJjQUFBLFNBQUFBLEdBcUNBLElBQUFDLEVBQUFDLEVBQUFDLEVBQUFELEVBY0EsVUFkQUMsRUFwQ0EsU0FBQUMsR0FDQSxJQW9CQUMsRUFwQkFDLEVBQUFOLEVBQUFPLFNBQUFDLFNBQUEsS0FBQVIsRUFBQU8sU0FBQUUsU0FJQUMsUUFBQUMsSUFBQSx1Q0FBQVAsRUFBQVEsUUFDQUYsUUFBQUMsSUFBQSx1REFDQUQsUUFBQUMsSUFBQVAsR0FHQUEsRUFBQVMsTUFBQSwyQkFBQVQsRUFBQVEsUUFFQVIsRUFBQVMsS0FBQUMsVUFBQVIsR0FFQUYsRUFBQVMsS0FBQUUsV0FBQSx3QkFBQVgsRUFBQVMsS0FBQUUsWUFFQUwsUUFBQUMsSUFBQSw2Q0FBQUssS0FBQUMsVUFBQWIsRUFBQVMsT0FDQUgsUUFBQUMsSUFBQSx3REFDQUQsUUFBQUMsSUFBQVAsRUFBQVMsTUFHQVIsRUFBQUQsRUFBQVMsS0FBQUssZ0JBQUFDLFdBQUEsTUFBQWYsRUFBQVMsS0FBQU8sdUJBR0FWLFFBQUFDLElBQUEsOERBQUFOLEdBR0FnQixVQUFBQyxLQUFBLENBQ0FsQixNQUFBLGdCQUNBbUIsT0FBQWxCLE9BT0FKLEVBY0FELEdBYkF3QixpQkFDQXZCLEVBQUF1QixpQkFBQXRCLEVBQUFDLEdBQ0FGLEVBQUF3QixZQUNBeEIsRUFBQXdCLFlBQUEsS0FBQXZCLEVBQUEsU0FBQUEsR0FDQUMsRUFBQXVCLEtBQUF6QixFQUFBQyxVQUVBLElBQUFELEVBQUEsS0FBQUMsSUFBQSxPQUFBRCxFQUFBLEtBQUFDLEtBQ0FELEVBQUEsS0FBQUMsR0FBQSxTQUFBQSxHQUNBQyxFQUFBdUIsS0FBQXpCLEVBQUFDLEtBOUNBLENBb0RBRixRQ3BEQSxTQUFBQSxHQThCQSxJQUFBQyxFQUFBQyxFQUFBQyxFQUFBRCxFQWNBLFVBZEFDLEVBN0JBLFNBQUFDLEdBQ0EsSUFBQUUsRUFBQU4sRUFBQU8sU0FBQUMsU0FBQSxLQUFBUixFQUFBTyxTQUFBRSxTQUlBQyxRQUFBQyxJQUFBLHVDQUFBUCxFQUFBUSxRQUNBRixRQUFBQyxJQUFBUCxHQUdBQSxFQUFBUyxNQUFBLDJCQUFBVCxFQUFBUSxRQUVBUixFQUFBUyxLQUFBQyxVQUFBUixHQUVBRixFQUFBUyxLQUFBRSxXQUFBLHdCQUFBWCxFQUFBUyxLQUFBRSxZQUVBTCxRQUFBQyxJQUFBLDZDQUFBSyxLQUFBQyxVQUFBYixFQUFBUyxPQUNBSCxRQUFBQyxJQUFBLHdEQUNBRCxRQUFBQyxJQUFBUCxFQUFBUyxNQUdBUSxVQUFBQyxLQUFBLENBQ0FsQixNQUFBLGdCQUNBdUIsU0FBQXZCLEVBQUFTLEtBQUFjLGNBT0ExQixFQWNBRCxHQWJBd0IsaUJBQ0F2QixFQUFBdUIsaUJBQUF0QixFQUFBQyxHQUNBRixFQUFBd0IsWUFDQXhCLEVBQUF3QixZQUFBLEtBQUF2QixFQUFBLFNBQUFBLEdBQ0FDLEVBQUF1QixLQUFBekIsRUFBQUMsVUFFQSxJQUFBRCxFQUFBLEtBQUFDLElBQUEsT0FBQUQsRUFBQSxLQUFBQyxLQUNBRCxFQUFBLEtBQUFDLEdBQUEsU0FBQUEsR0FDQUMsRUFBQXVCLEtBQUF6QixFQUFBQyxLQXZDQSxDQTZDQUYiLCJmaWxlIjoia2FseWJlci1leHRlcm5hbHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyIoZnVuY3Rpb24gKHdpbmRvdykge1xuICAgIGZ1bmN0aW9uIHJlY2VpdmVQYXJkb3RBYmFuZG9uTWVzc2FnZShldmVudCkge1xuICAgICAgICAgdmFyIHNpdGVVcmwgPSB3aW5kb3cubG9jYXRpb24ucHJvdG9jb2wgKyAnLy8nICsgd2luZG93LmxvY2F0aW9uLmhvc3RuYW1lLFxuICAgICAgICAgICAgc2hvd0RlYnVnID0gdHJ1ZTtcbiAgICBcbiAgICAgICAgaWYgKHNob3dEZWJ1Zykge1xuICAgICAgICAgICAgY29uc29sZS5sb2coXCJHVE0gUEFSRE9UIEZPUk0gQUJBTkRPTkVEIC0gb3JpZ2luOiBcIiArIGV2ZW50Lm9yaWdpbik7XG4gICAgICAgICAgICBjb25zb2xlLmxvZygnR1RNIFBBUkRPVCBGT1JNIEFCQU5ET05FRCAtIGZ1bGwgZXZlbnQgPj4+Pj4+Pj4+Pj4+Jyk7XG4gICAgICAgICAgICBjb25zb2xlLmxvZyhldmVudCk7XG4gICAgICAgIH1cblxuICAgICAgICBpZiAoZXZlbnQuZGF0YSAmJiBldmVudC5vcmlnaW4gPT09IFwiaHR0cHM6Ly9nby5rYWx5YmVyLmNvbVwiKSB7XG4gICAgICAgICAgICAvLyBlbnN1cmUgdGhpcyBvbmx5IGZpcmVzIHRhZ3Mgb24gdGhlIGludGVuZGVkIGRvbWFpblxuICAgICAgICAgICAgaWYgKGV2ZW50LmRhdGEucG9zdFVybCA9PT0gc2l0ZVVybCkge1xuICAgICAgICAgICAgICAgIC8vIE9ubHkgcHJvY2VzcyB0aGUgZXZlbnQgaWYgaXQgaGFzIGFuIGV2ZW50VHlwZVxuICAgICAgICAgICAgICAgIGlmIChldmVudC5kYXRhLmV2ZW50VHlwZSAmJiBldmVudC5kYXRhLmV2ZW50VHlwZSA9PT0gJ3BhcmRvdEZvcm1BYmFuZG9uZWQnKSB7XG4gICAgICAgICAgICAgICAgICAgIGlmIChzaG93RGVidWcpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiR1RNIFBBUkRPVCBGT1JNIEFCQU5ET05FRCAtIG1lc3NhZ2UgZGF0YTogXCIgKyBKU09OLnN0cmluZ2lmeShldmVudC5kYXRhKSk7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygnR1RNIFBBUkRPVCBGT1JNIEFCQU5ET05FRCAtIGRhdGEgb2JqZWN0ID4+Pj4+Pj4+Pj4+PicpO1xuICAgICAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coZXZlbnQuZGF0YSk7XG4gICAgICAgICAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgICAgICAgICB2YXIgZmllbGREYXRhID0gZXZlbnQuZGF0YS5maWVsZHNDb21wbGV0ZWQudG9TdHJpbmcoKSArIFwiIC0gXCIgKyBldmVudC5kYXRhLm51bWJlck9mRmllbGRzQ29tcGxldGU7XG5cbiAgICAgICAgICAgICAgICAgICAgaWYoc2hvd0RlYnVnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZygnR1RNIFBBUkRPVCBGT1JNIEFCQU5ET05FRCAtIHZhbHVlIHB1c2hlZCB0byBHVE0gZGF0YUxheWVyOiAnICsgZmllbGREYXRhKTtcbiAgICAgICAgICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAgICAgICAgIGRhdGFMYXllci5wdXNoKHtcbiAgICAgICAgICAgICAgICAgICAgICAgIGV2ZW50OiBcImZvcm1BYmFuZG9uZWRcIixcbiAgICAgICAgICAgICAgICAgICAgICAgIGZpZWxkczogZmllbGREYXRhLFxuICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBmdW5jdGlvbiBiaW5kRXZlbnQoZWwsIGV2dCwgZm4pIHtcbiAgICAgICAgaWYgKGVsLmFkZEV2ZW50TGlzdGVuZXIpIHtcbiAgICAgICAgICAgIGVsLmFkZEV2ZW50TGlzdGVuZXIoZXZ0LCBmbik7XG4gICAgICAgIH0gZWxzZSBpZiAoZWwuYXR0YWNoRXZlbnQpIHtcbiAgICAgICAgICAgIGVsLmF0dGFjaEV2ZW50KCdvbicgKyBldnQsIGZ1bmN0aW9uKGV2dCkge1xuICAgICAgICAgICAgICAgIGZuLmNhbGwoZWwsIGV2dCk7XG4gICAgICAgICAgICB9KTtcbiAgICAgICAgfSBlbHNlIGlmICh0eXBlb2YgZWxbJ29uJyArIGV2dF0gPT09ICd1bmRlZmluZWQnIHx8IGVsWydvbicgKyBldnRdID09PSBudWxsKSB7XG4gICAgICAgICAgICBlbFsnb24nICsgZXZ0XSA9IGZ1bmN0aW9uKGV2dCkge1xuICAgICAgICAgICAgICAgIGZuLmNhbGwoZWwsIGV2dCk7XG4gICAgICAgICAgICB9O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgYmluZEV2ZW50KHdpbmRvdywgXCJtZXNzYWdlXCIsIHJlY2VpdmVQYXJkb3RBYmFuZG9uTWVzc2FnZSk7XG59KSh3aW5kb3cpOyIsIihmdW5jdGlvbiAod2luZG93KSB7XG4gICAgZnVuY3Rpb24gcmVjZWl2ZVBhcmRvdENvbXBsZXRlZE1lc3NhZ2UoZXZlbnQpIHtcbiAgICAgICAgIHZhciBzaXRlVXJsID0gd2luZG93LmxvY2F0aW9uLnByb3RvY29sICsgJy8vJyArIHdpbmRvdy5sb2NhdGlvbi5ob3N0bmFtZSxcbiAgICAgICAgICAgIHNob3dEZWJ1ZyA9IHRydWU7XG4gICAgXG4gICAgICAgIGlmIChzaG93RGVidWcpIHtcbiAgICAgICAgICAgIGNvbnNvbGUubG9nKFwiR1RNIFBBUkRPVCBGT1JNIENPTVBMRVRFRCAtIG9yaWdpbjogXCIgKyBldmVudC5vcmlnaW4pO1xuICAgICAgICAgICAgY29uc29sZS5sb2coZXZlbnQpO1xuICAgICAgICB9XG5cbiAgICAgICAgaWYgKGV2ZW50LmRhdGEgJiYgZXZlbnQub3JpZ2luID09PSBcImh0dHBzOi8vZ28ua2FseWJlci5jb21cIikge1xuICAgICAgICAgICAgLy8gZW5zdXJlIHRoaXMgb25seSBmaXJlcyB0YWdzIG9uIHRoZSBpbnRlbmRlZCBkb21haW5cbiAgICAgICAgICAgIGlmIChldmVudC5kYXRhLnBvc3RVcmwgPT09IHNpdGVVcmwpIHtcbiAgICAgICAgICAgICAgICAvLyBPbmx5IHByb2Nlc3MgdGhlIGV2ZW50IGlmIGl0IGhhcyBhbiBldmVudFR5cGVcbiAgICAgICAgICAgICAgICBpZiAoZXZlbnQuZGF0YS5ldmVudFR5cGUgJiYgZXZlbnQuZGF0YS5ldmVudFR5cGUgPT09ICdwYXJkb3RGb3JtQ29tcGxldGVkJykge1xuICAgICAgICAgICAgICAgICAgICBpZiAoc2hvd0RlYnVnKSB7XG4gICAgICAgICAgICAgICAgICAgICAgICBjb25zb2xlLmxvZyhcIkdUTSBQQVJET1QgRk9STSBDT01QTEVURUQgLSBtZXNzYWdlIGRhdGE6IFwiICsgSlNPTi5zdHJpbmdpZnkoZXZlbnQuZGF0YSkpO1xuICAgICAgICAgICAgICAgICAgICAgICAgY29uc29sZS5sb2coJ0dUTSBQQVJET1QgRk9STSBDT01QTEVURUQgLSBkYXRhIG9iamVjdCA+Pj4+Pj4+Pj4+Pj4nKTtcbiAgICAgICAgICAgICAgICAgICAgICAgIGNvbnNvbGUubG9nKGV2ZW50LmRhdGEpO1xuICAgICAgICAgICAgICAgICAgICB9XG5cbiAgICAgICAgICAgICAgICAgICAgZGF0YUxheWVyLnB1c2goe1xuICAgICAgICAgICAgICAgICAgICAgICAgZXZlbnQ6IFwiZm9ybUNvbXBsZXRlZFwiLFxuICAgICAgICAgICAgICAgICAgICAgICAgZm9ybVR5cGU6IGV2ZW50LmRhdGEuZm9ybVR5cGUsXG4gICAgICAgICAgICAgICAgICAgIH0pO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cblxuICAgIGZ1bmN0aW9uIGJpbmRFdmVudChlbCwgZXZ0LCBmbikge1xuICAgICAgICBpZiAoZWwuYWRkRXZlbnRMaXN0ZW5lcikge1xuICAgICAgICAgICAgZWwuYWRkRXZlbnRMaXN0ZW5lcihldnQsIGZuKTtcbiAgICAgICAgfSBlbHNlIGlmIChlbC5hdHRhY2hFdmVudCkge1xuICAgICAgICAgICAgZWwuYXR0YWNoRXZlbnQoJ29uJyArIGV2dCwgZnVuY3Rpb24oZXZ0KSB7XG4gICAgICAgICAgICAgICAgZm4uY2FsbChlbCwgZXZ0KTtcbiAgICAgICAgICAgIH0pO1xuICAgICAgICB9IGVsc2UgaWYgKHR5cGVvZiBlbFsnb24nICsgZXZ0XSA9PT0gJ3VuZGVmaW5lZCcgfHwgZWxbJ29uJyArIGV2dF0gPT09IG51bGwpIHtcbiAgICAgICAgICAgIGVsWydvbicgKyBldnRdID0gZnVuY3Rpb24oZXZ0KSB7XG4gICAgICAgICAgICAgICAgZm4uY2FsbChlbCwgZXZ0KTtcbiAgICAgICAgICAgIH07XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBiaW5kRXZlbnQod2luZG93LCBcIm1lc3NhZ2VcIiwgcmVjZWl2ZVBhcmRvdENvbXBsZXRlZE1lc3NhZ2UpO1xufSkod2luZG93KTsiXX0=
