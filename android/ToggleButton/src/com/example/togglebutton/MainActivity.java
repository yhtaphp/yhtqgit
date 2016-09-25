package com.example.togglebutton;

import android.app.Activity;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.widget.CompoundButton;
import android.widget.Switch;
import android.widget.Toast;
import android.widget.CompoundButton.OnCheckedChangeListener;
import android.widget.ToggleButton;

public class MainActivity extends Activity {

	ToggleButton tog;
	Switch swt;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		
		tog = (ToggleButton)findViewById(R.id.toggle);
		swt = (Switch)findViewById(R.id.swt);
		
		tog.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
			@Override
			public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
				// TODO Auto-generated method stub
				if ( buttonView.isChecked()){
					Toast.makeText(getApplicationContext(), "ToggleButton：选择开启", Toast.LENGTH_SHORT).show();
				}
			}
		});
		swt.setOnCheckedChangeListener(new OnCheckedChangeListener() {
			
			@Override
			public void onCheckedChanged(CompoundButton buttonView, boolean isChecked) {
				// TODO Auto-generated method stub
				if ( buttonView.isChecked()){
					Toast.makeText(getApplicationContext(), "Switch: 选择了", Toast.LENGTH_SHORT).show();
				}
			}
		});
	}
	
	
}
