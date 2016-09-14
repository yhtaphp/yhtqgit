package com.example.button;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.View.*;
import android.widget.Button;

public class MainActivity extends Activity {

	Button btn_one,btn_two;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		btn_one = (Button)findViewById(R.id.btn_one);
		btn_two = (Button)findViewById(R.id.btn_two);
		btn_two.setOnClickListener(new OnClickListener() {
			
			@Override
			public void onClick(View v) {
				// TODO Auto-generated method stub
				if ( btn_two.getText().toString().equals("按钮不可用")){
					btn_one.setEnabled(false);
					btn_two.setText("按钮可用");
				}else{
					btn_one.setEnabled(true);
					btn_two.setText("按钮不可用");
				}
				
			}
		});
	}
}
