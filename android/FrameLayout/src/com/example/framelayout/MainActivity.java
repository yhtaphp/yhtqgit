package com.example.framelayout;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.MotionEvent;
import android.view.View;
import android.widget.FrameLayout;

// 注意导入android的库
import android.view.View.OnTouchListener; 

public class MainActivity extends Activity {

	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		FrameLayout frameLayout = (FrameLayout)findViewById(R.id.myframe);
		final MeziView mezi = new MeziView(MainActivity.this);
		
		mezi.setOnTouchListener(new OnTouchListener() {
			
			@Override
			public boolean onTouch(View v, MotionEvent event) {
				// TODO Auto-generated method stub
				mezi.bimX = event.getX();
				mezi.bimY = event.getY();
				mezi.invalidate();
				return true;
			}
		});
		
		frameLayout.addView(mezi);
	}
	
	
	
}
